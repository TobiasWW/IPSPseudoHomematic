<?
    class PseudoHomeMaticDevice extends IPSModule
	{
		private function v_dump($mixed = null)
		{
			$content = "IST NULL";
			if (isset($mixed))
			{
				ob_start();
				var_dump($mixed);
				$content = ob_get_contents();
				ob_end_clean();
			}
			return $content;
		}
		
        public function __construct($InstanceID)
		{
            parent::__construct($InstanceID);
        }

        public function Create()
		{
            parent::Create();
		}

        public function ApplyChanges()
		{
            parent::ApplyChanges();
        }
		
		public function ReceiveData($JSONString)
		{
			IPS_LogMessage(__CLASS__ . "." . __FUNCTION__, $JSONString);
		}
		
		public function SendeDaten($JSONString)
		{
			IPS_LogMessage(__CLASS__ . "." . __FUNCTION__, $JSONString);
			$res = $this->SendDataToParent($JSONString);
			IPS_LogMessage(__CLASS__ . "." . __FUNCTION__, "Result: " . v_dump($res));
		}
    }
?>