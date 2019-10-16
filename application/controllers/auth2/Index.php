<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
   
    public function __Construct()
    {
        parent ::__construct();
    }

    public function login()
    {
      $this->data['judul'] = 'Login User';
      $this->load->view('login', $this->data);
    }

    public function logout() {
    	var_dump('test') or die;
	}

    public function login_user()
    {  
		if(isset($_POST['username']) && isset($_POST['password'])){
			$adServer = "ldap://domainname.com";
			
			$ldap = ldap_connect($adServer);
			$username = $_POST['username'];
			$password = $_POST['password'];

			$ldaprdn = 'domainname' . "\\" . $username;

			ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

			$bind = @ldap_bind($ldap, $ldaprdn, $password);

			if ($bind) {
				$filter="(sAMAccountName=$username)";
				$result = ldap_search($ldap,"dc=MYDOMAIN,dc=COM",$filter);
				ldap_sort($ldap,$result,"sn");
				$info = ldap_get_entries($ldap, $result);
				for ($i=0; $i<$info["count"]; $i++)
				{
					if($info['count'] > 1)
						break;
					echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
					echo '<pre>';
					var_dump($info);
					echo '</pre>';
					$userDn = $info[$i]["distinguishedname"][0]; 
				}
				@ldap_close($ldap);
				
				echo 'Authentication Succed';
			} 
			else {
				
				echo 'Authentication Failed';
			}

		}
    }

   
	
  
    
}
