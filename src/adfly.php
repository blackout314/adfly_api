<?php

namespace adfly\Api;

/**
 * Class adfly
 *
 * @package adfly\Api
 */
class adfly {
  public $conf = array();
  private $KEY;
  private $UID;
  const URL = 'http://api.adf.ly/api.php?';
  /**
   * Constructor
   *
   * @param string $KEY Api KEY
   * @param string $UID Api UID
   * @param string $domain domain
   * @param string $adtype int|banner
   */
  public function __construct($key, $uid, $domain = 'adf.ly', $adtype = 'int')
  {
    $this->KEY  = $key;
    $this->UID  = $uid;
    $this->conf = [
      'domain'  => $domain,
      'adtype'  => $adtype,
    ];
  }
  /**
   * __get method
   *
   * @param string $url
   *
   * @return string|boolean
   */
  public function __get($url)
  {
    $query = [
      'key'   => $this->KEY,
      'uid'   => $this->UID,
      'advert_type' => $this->conf['adtype'],
      'domain'=> $this->conf['domain'],
      'url'   => $url,
    ];
    if($data = file_get_contents(URL.http_build_query($query)))
    {
      return $data;
    }
    return false;
  }
}
