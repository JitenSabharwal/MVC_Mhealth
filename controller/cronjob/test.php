<?php
 
Class Ssh2_crontab_manager {
 
    private $connection;
    private $path;
    private $handle;
    private $cron_file;
 
    function __construct($host=NULL, $port=NULL, $username=NULL, $password=NULL)
    {
        $path_length     = strrpos(__FILE__, "/");      
        $this->path      = substr(__FILE__, 0, $path_length) . '/';
        $this->handle    = 'crontab.txt';        
        $this->cron_file = "{$this->path}{$this->handle}";
     
        try
        {
            if (is_null($host) || is_null($port) || is_null($username) || is_null($password)) throw new Exception("Please specify the host, port, username and password!");
             
            $this->connection = @ssh2_connect($host, $port);
            if ( ! $this->connection) throw new Exception("The SSH2 connection could not be established.");
     
            $authentication = @ssh2_auth_password($this->connection, $username, $password);
            if ( ! $authentication) throw new Exception("Could not authenticate '{$username}' using password: '{$password}'.");
        }
        catch (Exception $e)
        {
            $this->error_message($e->getMessage());
        }
    }
 
    public function exec() 
    {
        $argument_count = func_num_args();
        try
        {
            if ( ! $argument_count) throw new Exception("There is nothing to execute, no arguments specified.");
     
            $arguments = func_get_args();
     
            $command_string = ($argument_count > 1) ? implode(" && ", $arguments) : $arguments[0];
     
            $stream = @ssh2_exec($this->connection, $command_string);
            if ( ! $stream) throw new Exception("Unable to execute the specified commands: <br />{$command_string}");
     
        }
        catch
        {
            $this->error_message($e->getMessage());
        }
     
        return $this;
    }
 
    public function write_to_file($path=NULL, $handle=NULL)
    {
        if ( ! $this->crontab_file_exists())
        {   
            $this->handle = (is_null($handle)) ? $this->handle : $handle;
            $this->path   = (is_null($path))   ? $this->path   : $path;
     
            $this->cron_file = "{$this->path}{$this->handle}";
     
            $init_cron = "crontab -l > {$this->cron_file} && [ -f {$this->cron_file} ] || > {$this->cron_file}";
     
            $this->exec($init_cron);
        }
     
        return $this;
    }
 
    public function remove_file()
    {
        if ($this->crontab_file_exists()) $this->exec("rm {$this->cron_file}");
     
        return $this;
    }
 
    public function append_cronjob($cron_jobs=NULL)
    {
        if (is_null($cron_jobs)) $this->error_message("Nothing to append!  Please specify a cron job or an array of cron jobs.");
         
        $append_cronfile = "echo '";        
         
        $append_cronfile .= (is_array($cron_jobs)) ? implode("\n", $cron_jobs) : $cron_jobs;
         
        $append_cronfile .= "'  >> {$this->cron_file}";
         
        $install_cron = "crontab {$this->cron_file}";
     
        $this->write_to_file()->exec($append_cronfile, $install_cron)->remove_file();
         
        return $this;
    }
 
    // public function remove_cronjob() {...}
 
    // public function remove_crontab() {...}
 
     private function crontab_file_exists() 
     {
        return file_exists($this->cron_file);
     }
 
    private function error_message($error) 
    {
        die("<pre style='color:#EE2711'>ERROR: {$error}</pre>");
    }
 
}
$crontab = new Ssh2_crontab_manager('mhealthsrm.org', '22', 'root', 'mhealth@123');
$crontab->append_cronjob('30 8 * * 6 home/path/to/command/the_command.sh >/dev/null 2>&1');

?>