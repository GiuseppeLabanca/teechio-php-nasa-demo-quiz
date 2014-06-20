<? require_once 'lib/Unirest.php';

require_once 'TeechioModel.php'; 


class TeechioQuery extends TeechioModel{

	public function query($array) {
		$response = Unirest::get(self::$config['host'] . self::$endpoint . '?query=' . json_encode($array));
		if($response->code == 200) {
            return $response->body;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

}

?>