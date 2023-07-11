<?php
class Haiku
{
    private $kami;
    private $naka;
    private $simo;

    // コンストラクタ
    public function __construct($kami, $naka, $simo)
    {
        $this->kami = $kami;
        $this->naka = $naka;
        $this->simo = $simo;
    }

    // ゲッターとセッターを作成
    public function getKami()
    {
        return $this->kami;
    }
    public function setKami($kami)
    {
        $this->kami = $kami;
    }
    public function getNaka()
    {
        return $this->naka;
    }
    public function setNaka($naka)
    {
        $this->naka = $naka;
    }
    public function getSimo()
    {
        return $this->simo;
    }
    public function setSimo($simo)
    {
        $this->simo = $simo;
    }

    /**
     * 上の句、中の句、下の句がそれぞれ5,7,5の文字数であるかを判定する
     *
     * return: bool
     */
    public function isPerfectHaiku()
    {
        // 上の句、中の句、下の句の文字数をそれぞれ取得
        $kamiLength = mb_strlen($this->kami);
        $nakaLength = mb_strlen($this->naka);
        $simoLength = mb_strlen($this->simo);

        return $kamiLength === 5 && $nakaLength === 7 && $simoLength === 5;
    }

    /**
     * 字足らずが発生しているかを判定する
     *
     * return: bool
     */
    public function isLacking()
    {
        // 上の句、中の句、下の句の文字数をそれぞれ取得
        $kamiLength = mb_strlen($this->kami);
        $nakaLength = mb_strlen($this->naka);
        $simoLength = mb_strlen($this->simo);

        return $kamiLength < 5 || $nakaLength < 7 || $simoLength < 5;
    }

    /**
     * 字余りが発生しているかを判定する
     *
     * return: bool
     */
    public function isOverflowing() {
        // 上の句、中の句、下の句の文字数をそれぞれ取得
        $kamiLength = mb_strlen($this->kami);
        $nakaLength = mb_strlen($this->naka);
        $simoLength = mb_strlen($this->simo);

        return $kamiLength > 5 || $nakaLength > 7 || $simoLength > 5;
    }
}
?>
