<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

    public $user;

    public function __construct($username, $password = null) {
        // sets username and password values
        parent::__construct($username, $password);

        $this->user = User::model()->find('LOWER(username)=:input', array(':input' => strtolower($this->username)));

        if ($this->user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        elseif ($password === null) {
            /**
             * you can set here states for user logged in with oauth if you need
             * you can also use hoauthAfterLogin()
             * @link https://github.com/SleepWalker/hoauth/wiki/Callbacks
             */
            $this->beforeAuthentication();
            $this->errorCode = self::ERROR_NONE;
        }
    }

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        if ($this->errorCode === self::ERROR_UNKNOWN_IDENTITY) {
            if ($this->user->password !== $this->password) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            }
            else {
                $this->beforeAuthentication();
                $this->setState('role', $this->user->role);
                $this->errorCode = self::ERROR_NONE;
            }
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->user->id;
    }

    public function getName() {
        return $this->user->username;
    }

    public function beforeAuthentication() {
        // do before authenctiation work
    }
}