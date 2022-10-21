<?php declare(strict_types=1);

namespace Ljfreelancer88\Configuration;

class Configuration {
	conSt ENV_API_KEY = 'DAILY_API_KEY';

	protected $password;
	protected $environment;

    public function __construct($password = null, $environment = null) {
    	$this->environment = $environment ?: \getenv();

        $this->password = $this->getArg($password, self::ENV_API_KEY);

    	if (!$this->password) {
            throw new ConfigurationException('Credentials are required to communicate.');
        }
    }

     /**
     * Determines argument value accounting for environment variables.
     *
     * @param string $arg The constructor argument
     * @param string $envVar The environment variable name
     * @return ?string Argument value
     */
    public function getArg(?string $arg, string $envVar): ?string {
        if ($arg) {
            return $arg;
        }

        if (\array_key_exists($envVar, $this->environment)) {
            return $this->environment[$envVar];
        }

        return null;
    }
}