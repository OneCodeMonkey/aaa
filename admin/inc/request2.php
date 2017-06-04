<?php 
	class carData2{
		private $json_url="http://42.159.133.122:8082/mongodb/boschxdk27/latestdata/";

		public function __construct(){
        	
    	}
        /**
         * 将JSON内容转为数据，并返回
         * @param string $content [内容]
         * @return array
         */
        public function _returnArray($content){
            return json_decode($content,true);
        }

    	public function __request(){
    		$content = $this->juhecurl($this->json_url);
       	    return $this->_returnArray($content);
    	}

        /**
         * 请求接口返回内容
         * @param  string $url [请求的URL地址]
         * @param  string $params [请求的参数]
         * @param  int $ipost [是否采用POST形式]
         * @return  string
         */
        public function juhecurl($url,$params=false,$ispost=0){
            $httpInfo = array();
            $ch = curl_init();
     
            curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
            curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36' );
            curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
            curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
            if( $ispost )
            {
                curl_setopt( $ch , CURLOPT_POST , true );
                curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
                curl_setopt( $ch , CURLOPT_URL , $url );
            }
            else
            {
                if($params){
                    curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
                }else{
                    curl_setopt( $ch , CURLOPT_URL , $url);
                }
            }
            $response = curl_exec( $ch );
            if ($response === FALSE) {
                //echo "cURL Error: " . curl_error($ch);
                return false;
            }
            $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
            $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
            curl_close( $ch );
            return $response;
        }
    }
?>