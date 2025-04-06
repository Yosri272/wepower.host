<?php

namespace Illuminate\Support;

use Illuminate\Contracts\Support\Htmlable;
<<<<<<< HEAD

class HtmlString implements Htmlable
=======
use Stringable;

class HtmlString implements Htmlable, Stringable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * The HTML string.
     *
     * @var string
     */
    protected $html;

    /**
     * Create a new HTML string instance.
     *
     * @param  string  $html
     * @return void
     */
    public function __construct($html = '')
    {
        $this->html = $html;
    }

    /**
     * Get the HTML string.
     *
     * @return string
     */
    public function toHtml()
    {
        return $this->html;
    }

    /**
     * Determine if the given HTML string is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
<<<<<<< HEAD
        return $this->html === '';
=======
        return ($this->html ?? '') === '';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Determine if the given HTML string is not empty.
     *
     * @return bool
     */
    public function isNotEmpty()
    {
        return ! $this->isEmpty();
    }

    /**
     * Get the HTML string.
     *
     * @return string
     */
    public function __toString()
    {
<<<<<<< HEAD
        return $this->toHtml();
=======
        return $this->toHtml() ?? '';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
