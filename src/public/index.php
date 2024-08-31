<?php

//課題①
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
echo '<br>';

//課題②
$purchasedItemPriceList[] = new PurchasedItemPrice(500);
$purchasedItemPriceList[] = new PurchasedItemPrice(2000);
$purchasedItemPriceList[] = new PurchasedItemPrice(5000);
$purchasedItemPriceCollection = new PurchasedItemPriceCollection(
    $purchasedItemPriceList
);

// 購入した商品の合計金額を出力しています。
echo $purchasedItemPriceCollection->findTotalPurchasedItemPrice();

// プロパティに「購入した商品の金額」を持ち、「購入した商品の金額を返す」メソッドを持つクラスです。
class PurchasedItemPrice
{
    private $purchasedItemPrice;

    public function __construct(int $purchasedItemPrice)
    {
        $this->purchasedItemPrice = $purchasedItemPrice;
    }

    public function purchasedItemPrice()
    {
        return $this->purchasedItemPrice;
    }
}

// プロパティに「クラスがいくつか入っている配列」を持ち、「購入した商品の合計金額を返す」メソッドを持つクラスです。
class PurchasedItemPriceCollection
{
    private $purchasedItemPriceList;

    public function __construct(array $purchasedItemPriceList)
    {
        $this->purchasedItemPriceList = $purchasedItemPriceList;
    }

    public function findTotalPurchasedItemPrice()
    {
        $totalPurchasedItemPrice = 0;
        foreach ($this->purchasedItemPriceList as $purchasedItemPrice) {
            $totalPurchasedItemPrice += $purchasedItemPrice->purchasedItemPrice();
        }
        return $totalPurchasedItemPrice;
    }
}
