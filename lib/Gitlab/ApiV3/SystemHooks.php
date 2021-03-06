<?php namespace Gitlab\ApiV3;

class SystemHooks extends \Gitlab\Api\AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->get('hooks');
    }

    /**
     * @param string $url
     * @return mixed
     */
    public function create($url)
    {
        return $this->post('hooks', array(
            'url' => $url
        ));
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function test($id)
    {
        return $this->get('hooks/'.$this->encodePath($id));
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function remove($id)
    {
        return $this->delete('hooks/'.$this->encodePath($id));
    }
}
