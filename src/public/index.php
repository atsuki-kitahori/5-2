<?php
$distance = new Distance(5);
$time = new Time(4);

// 「距離 / 時間」をして「速さ」を出力しています。
echo $distance->distance() / $time->time();

// プロパティに距離を持っていて、距離を返すメソッドを持っているクラスです。
class Distance
{
    private $distance;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function distance()
    {
        return $this->distance;
    }
}

// プロパティに時間を持っていて、時間を返すメソッドを持っているクラスです。
class Time
{
    private $time;

    public function __construct(int $time)
    {
        $this->time = $time;
    }

    public function time()
    {
        return $this->time;
    }
}
