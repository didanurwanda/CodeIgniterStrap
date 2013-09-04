<?php

class Bootstrap
{
    // TEXT
    const TEXT_COLOR_DEFAULT = 'primary';
    const TEXT_COLOR_MUTTED = 'mutted';
    const TEXT_COLOR_PRIMARY = 'primary';
    const TEXT_COLOR_SUCCESS = 'success';
    const TEXT_COLOR_INFO = 'info';
    const TEXT_COLOR_WARNING = 'warning';
    const TEXT_COLOR_DANGER = 'danger';

    // BUTTON
    const BUTTON_COLOR_DEFAULT = 'default';
    const BUTTON_COLOR_PRIMARY = 'primary';
    const BUTTON_COLOR_SUCCESS = 'success';
    const BUTTON_COLOR_INFO = 'info';
    const BUTTON_COLOR_WARNING = 'warning';
    const BUTTON_COLOR_DANGER = 'danger';
    const BUTTON_COLOR_LINK = 'link';

    const BUTTON_SIZE_LARGE = 'lg';
    const BUTTON_SIZE_SMALL = 'sm';
    const BUTTON_SIZE_EXTRA_SMALL = 'xs';

    const BUTTON_BLOCK_TRUE = 'block';
    const BUTTON_DISABLED_TRUE = 'disabled';

    const BUTTON_TYPE_LINK = 'link';
    const BUTTON_TYPE_HTML = 'button';
    const BUTTON_TYPE_SUBMIT = 'submit';
    const BUTTON_TYPE_RESET = 'reset';

    // BUTTON GROUP
    const BUTTON_GROUP_LARGE = 'lg';
    const BUTTON_GROUP_SMALL = 'sm';
    const BUTTON_GROUP_EXTRA_SMALL = 'xs';

    const BUTTON_GROUP_VERTICAL = 'btn-group-vertical';
    const BUTTON_GROUP_JUSTIFIED = 'justified';


    public function __construct()
    {
    }

    public static function buttonDropdown($label, $dropdown = array(), $htmlOptions = array())
    {

    }

    public static function dropdown($dropdown = array(), $htmlOptions = array())
    {
        $htmlOptions = self::addCssClass('dropdown-menu', $htmlOptions);
        $htmlOptions = self::addAttributes('role', 'menu', $htmlOptions);
        $html = self::openTag('ul', $htmlOptions);
            foreach ($dropdown as $row) 
            {
                $html .= self::openTag('li');    

                $label = self::getValue($row['label']);
                $url = self::getValue($row['url']);
                $icon = self::getValue($row['icon']);

                $html .= self::tag('a', array('href' => $url), self::icon($icon) . $label);
                $html .= self::closeTag('li');
            }
        $html .= self::closeTag('ul');
        return $html;
    }

    public static function buttonToolbar($button = array(), $htmlOptions = array())
    {
        $htmlOptions = self::addCssClass('btn-toolbar', $htmlOptions);
        $html = self::openTag('div', $htmlOptions);
            foreach($button as $row)
            {
                $html .= self::buttonGroup($row['items'], isset($row['options']) ? $row['options'] : array());
            }
        $html .= self::closeTag('div');
        return $html;
    }

    public static function buttonGroup($button = array(), $htmlOptions = array())
    {
        $htmlOptions = self::repValue('class', 'type', 'btn-group', $htmlOptions);
        $htmlOptions = self::popValue('class', 'align', $htmlOptions, 'btn-group-');

        $html = self::openTag('div', $htmlOptions);
            foreach($button as $row)
            {
                $label = '';
                if(isset($row['label']))
                {
                    $label = $row['label']; unset($row['label']);
                }
                $html .= self::button($label, $row);
            }
        $html .= self::closeTag('div');
        return $html;
    }

    public static function button($label, $htmlOptions = array())
    {
        $htmlOptions['class'] = 'btn';
        $htmlOptions = self::repValue('class', 'color', self::BUTTON_COLOR_DEFAULT, $htmlOptions, 'btn-');
        $htmlOptions = self::popValue('class', 'size', $htmlOptions, 'btn-');
        $htmlOptions = self::popValue('class', 'block', $htmlOptions, 'btn-');
        $htmlOptions = self::popValue('disabled', 'disabled', $htmlOptions);

        $tag = 'button';
        if(isset($htmlOptions['type']) && $htmlOptions['type'] == 'link')
        {
            $tag = 'a';
            unset($htmlOptions['type']);
        }
        if(isset($htmlOptions['icon']))
        {
            $label = self::icon($htmlOptions['icon']). ' ' .$label;
            unset($htmlOptions['icon']);
        }

        return self::tag($tag, $htmlOptions, $label);
    }

    public static function abbr($text, $title, $htmlOptions = array())
    {
        $htmlOptions = self::addAttributes('title', $title, $htmlOptions);
        return self::tag('abbr', $htmlOptions, $text);
    }

    public static function em($text, $htmlOptions = array(), $tag = 'p')
    {
        $htmlOptions = self::popValue('class', 'color', $htmlOptions, 'text-');
        return self::tag($tag, $htmlOptions, $text);
    }

    public static function lead($text, $htmlOptions = array())
    {
        $htmlOptions = self::addCssClass('lead', $htmlOptions);
        return self::tag('p', $htmlOptions, $text);
    }

    public static function small($text, $htmlOptions = array())
    {
        return self::tag('small', $htmlOptions, $text);
    }

    public static function b($text, $htmlOptions = array())
    {
        return self::tag('strong', $htmlOptions, $text);
    }

    public static function i($text, $htmlOptions = array())
    {
        return self::tag('em', $htmlOptions, $text);
    }

    public static function icon($iconName)
    {
        return self::tag('span', array('class'=>'glyphicon '. $iconName), '');
    }

    public static function tag($tag, $htmlOptions = array(), $content = false, $closeTag = true)
    {
        $html = '<'. $tag . self::parseAttributes($htmlOptions);
        if($content === false)
        {
            $html .= $closeTag ? ' />' : '>';
        }
        else
        {
            $html .= $closeTag ? '>'. $content .'</'. $tag .'>' : '>'. $content;
        }
        return $html;
    }

    public static function openTag($tag, $htmlOptions = array())
    {
        return self::tag($tag, $htmlOptions, false, false);
    }

    public static function closeTag($tag)
    {
        return '</'. $tag .'>';
    }

    public static function parseAttributes($htmlOptions = array())
    {
        $html = '';
        foreach ($htmlOptions as $key => $value) 
        {
            $html .= ' '. $key .'="'. $value .'"';
        }
        return $html;
    }

    public static function addAttributes($attr, $value, $htmlOptions = array())
    {
        if($attr && $value)
        {
            if(isset($htmlOptions[$attr]))
            {
                $htmlOptions[$attr] .= ' '. $value;
            }
            else
            {
                $htmlOptions[$attr] = $value;
            }
        }
        return $htmlOptions;
    }

    public static function addCssClass($class, $htmlOptions = array())
    {
        return self::addAttributes('class', $class, $htmlOptions);
    }

    public static function addCssId($id, $htmlOptions = array())
    {
        return self::addAttributes('id', $id, $htmlOptions);
    }

    public static function repValue($key, $value, $default, $htmlOptions = array(), $preffix = '', $suffix = '')
    {
        if(!isset($htmlOptions[$value]))
        {
            $htmlOptions[$value] = $default;
        }
        return self::popValue($key, $value, $htmlOptions, $preffix, $suffix);
    }

    public static function popValue($key, $value, $htmlOptions = array(), $preffix = '', $suffix = '')
    {
        $val = isset($htmlOptions[$value]) ? $htmlOptions[$value] : false;
        unset($htmlOptions[$value]);

        return $val ? self::addAttributes($key, $preffix . $val . $suffix, $htmlOptions) : $htmlOptions;
    }

    public static function getValue($value)
    {
        $val = isset($value) ? $value : '';
        unset($value);
        return $val;
    }
}

class Tb extends Bootstrap{}
