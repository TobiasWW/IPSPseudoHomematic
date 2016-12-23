<?
    class PseudoHomeMaticSocket extends IPSModule
	{
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
		
		public function ForwardData($JSONString)
		{
			IPS_LogMessage(__CLASS__ . "." . __FUNCTION__, $JSONString);
		}
    }
?>