<?php

class Bootstrap
{
    // TEXT
    const TEXT_COLOR_DEFAULT = 'primary';
    const TEXT_COLOR_MUTED = 'muted';
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

    const BUTTON_TYPE_LINK = 'link';
    const BUTTON_TYPE_HTML = 'button';
    const BUTTON_TYPE_SUBMIT = 'submit';
    const BUTTON_TYPE_RESET = 'reset';

    // BUTTON GROUP
    const BUTTON_GROUP_SIZE_LARGE = 'lg';
    const BUTTON_GROUP_SIZE_SMALL = 'sm';
    const BUTTON_GROUP_SIZE_EXTRA_SMALL = 'xs';

    // PULL
    const PULL_LEFT = 'left';
    const PULL_RIGHT = 'right';

    // NAVS
    const NAV_TABS = 'tabs';
    const NAV_PILLS = 'pills';

    // TEXT ALIGN
    const TEXT_ALIGN_LEFT = 'left';
    const TEXT_ALIGN_CENTER = 'center';
    const TEXT_ALIGN_RIGHT = 'right';

    // FORM
    const INPUT_TYPE_PASSWORD = 'password';
    const INPUT_TYPE_FILE = 'file';
    const INPUT_TYPE_EMAIL = 'email';
    const INPUT_TYPE_TEXT = 'text';

    // IMAGE
    const IMAGE_TYPE_ROUNDED = 'rounded';
    const IMAGE_TYPE_CIRCLE = 'circle';
    const IMAGE_TYPE_THUMBNAIL = 'thumbnail';

    // ICON
    const ICON_ADJUST = 'glyphicon-adjust';
    const ICON_ALIGN_CENTER = 'glyphicon-align-center';
    const ICON_ALIGN_JUSTIFY = 'glyphicon-align-justify';
    const ICON_ALIGN_LEFT = 'glyphicon-align-left';
    const ICON_ALIGN_RIGHT = 'glyphicon-align-right';
    const ICON_ARROW_DOWN = 'glyphicon-arrow-down';
    const ICON_ARROW_LEFT = 'glyphicon-arrow-left';
    const ICON_ARROW_RIGHT = 'glyphicon-arrow-right';
    const ICON_ARROW_UP = 'glyphicon-arrow-up';
    const ICON_ASTERISK = 'glyphicon-asterisk';
    const ICON_BACKWARD = 'glyphicon-backward';
    const ICON_BAN_CIRCLE = 'glyphicon-ban-circle';
    const ICON_BARCODE = 'glyphicon-barcode';
    const ICON_BELL = 'glyphicon-bell';
    const ICON_BOLD = 'glyphicon-bold';
    const ICON_BOOK = 'glyphicon-book';
    const ICON_BOOKMARK = 'glyphicon-bookmark';
    const ICON_BRIEFCASE = 'glyphicon-briefcase';
    const ICON_BULLHORN = 'glyphicon-bullhorn';
    const ICON_CALENDAR = 'glyphicon-calendar';
    const ICON_CAMERA = 'glyphicon-camera';
    const ICON_CERTIFICATE = 'glyphicon-certificate';
    const ICON_CHECK = 'glyphicon-check';
    const ICON_CHEVRON_DOWN = 'glyphicon-chevron-down';
    const ICON_CHEVRON_LEFT = 'glyphicon-chevron-left';
    const ICON_CHEVRON_RIGHT = 'glyphicon-chevron-right';
    const ICON_CHEVRON_UP = 'glyphicon-chevron-up';
    const ICON_CIRCLE_ARROW_DOWN = 'glyphicon-circle-arrow-down';
    const ICON_CIRCLE_ARROW_LEFT = 'glyphicon-circle-arrow-left';
    const ICON_CIRCLE_ARROW_RIGHT = 'glyphicon-circle-arrow-right';
    const ICON_CIRCLE_ARROW_UP = 'glyphicon-circle-arrow-up';
    const ICON_CLOUD = 'glyphicon-cloud';
    const ICON_CLOUD_DOWNLOAD = 'glyphicon-cloud-download';
    const ICON_CLOUD_UPLOAD = 'glyphicon-cloud-upload';
    const ICON_COG = 'glyphicon-cog';
    const ICON_COLLAPSE_DOWN = 'glyphicon-collapse-down';
    const ICON_COLLAPSE_UP = 'glyphicon-collapse-up';
    const ICON_COMMENT = 'glyphicon-comment';
    const ICON_COMPRESSED = 'glyphicon-compressed';
    const ICON_COPYRIGHT_MARK = 'glyphicon-copyright-mark';
    const ICON_CREDIT_CARD = 'glyphicon-credit-card';
    const ICON_CUTLERY = 'glyphicon-cutlery';
    const ICON_DASHBOARD = 'glyphicon-dashboard';
    const ICON_DOWNLOAD = 'glyphicon-download';
    const ICON_DOWNLOAD_ALT = 'glyphicon-download-alt';
    const ICON_EARPHONE = 'glyphicon-earphone';
    const ICON_EDIT = 'glyphicon-edit';
    const ICON_EJECT = 'glyphicon-eject';
    const ICON_ENVELOPE = 'glyphicon-envelope';
    const ICON_EURO = 'glyphicon-euro';
    const ICON_EXCLAMATION_SIGN = 'glyphicon-exclamation-sign';
    const ICON_EXPAND = 'glyphicon-expand';
    const ICON_EXPORT = 'glyphicon-export';
    const ICON_EYE_CLOSE = 'glyphicon-eye-close';
    const ICON_EYE_OPEN = 'glyphicon-eye-open';
    const ICON_FACETIME_VIDEO = 'glyphicon-facetime-video';
    const ICON_FAST_BACKWARD = 'glyphicon-fast-backward';
    const ICON_FAST_FORWARD = 'glyphicon-fast-forward';
    const ICON_FILE = 'glyphicon-file';
    const ICON_FILM = 'glyphicon-film';
    const ICON_FILTER = 'glyphicon-filter';
    const ICON_FIRE = 'glyphicon-fire';
    const ICON_FLAG = 'glyphicon-flag';
    const ICON_FLASH = 'glyphicon-flash';
    const ICON_FLOPPY_DISK = 'glyphicon-floppy-disk';
    const ICON_FLOPPY_OPEN = 'glyphicon-floppy-open';
    const ICON_FLOPPY_REMOVE = 'glyphicon-floppy-remove';
    const ICON_FLOPPY_SAVE = 'glyphicon-floppy-save';
    const ICON_FLOPPY_SAVED = 'glyphicon-floppy-saved';
    const ICON_FOLDER_CLOSE = 'glyphicon-folder-close';
    const ICON_FOLDER_OPEN = 'glyphicon-folder-open';
    const ICON_FONT = 'glyphicon-font';
    const ICON_FORWARD = 'glyphicon-forward';
    const ICON_FULLSCREEN = 'glyphicon-fullscreen';
    const ICON_GBP = 'glyphicon-gbp';
    const ICON_GIFT = 'glyphicon-gift';
    const ICON_GLASS = 'glyphicon-glass';
    const ICON_GLOBE = 'glyphicon-globe';
    const ICON_HAND_DOWN = 'glyphicon-hand-down';
    const ICON_HAND_LEFT = 'glyphicon-hand-left';
    const ICON_HAND_RIGHT = 'glyphicon-hand-right';
    const ICON_HAND_UP = 'glyphicon-hand-up';
    const ICON_HD_VIDEO = 'glyphicon-hd-video';
    const ICON_HDD = 'glyphicon-hdd';
    const ICON_HEADER = 'glyphicon-header';
    const ICON_HEADPHONES = 'glyphicon-headphones';
    const ICON_HEART = 'glyphicon-heart';
    const ICON_HEART_EMPTY = 'glyphicon-heart-empty';
    const ICON_HOME = 'glyphicon-home';
    const ICON_IMPORT = 'glyphicon-import';
    const ICON_INBOX = 'glyphicon-inbox';
    const ICON_INDENT_LEFT = 'glyphicon-indent-left';
    const ICON_INDENT_RIGHT = 'glyphicon-indent-right';
    const ICON_INFO_SIGN = 'glyphicon-info-sign';
    const ICON_ITALIC = 'glyphicon-italic';
    const ICON_LEAF = 'glyphicon-leaf';
    const ICON_LINK = 'glyphicon-link';
    const ICON_LIST = 'glyphicon-list';
    const ICON_LIST_ALT = 'glyphicon-list-alt';
    const ICON_LOCK = 'glyphicon-lock';
    const ICON_LOG_IN = 'glyphicon-log-in';
    const ICON_LOG_OUT = 'glyphicon-log-out';
    const ICON_MAGNET = 'glyphicon-magnet';
    const ICON_MAP_MARKER = 'glyphicon-map-marker';
    const ICON_MINUS = 'glyphicon-minus';
    const ICON_MINUS_SIGN = 'glyphicon-minus-sign';
    const ICON_MOVE = 'glyphicon-move';
    const ICON_MUSIC = 'glyphicon-music';
    const ICON_NEW_WINDOW = 'glyphicon-new-window';
    const ICON_OFF = 'glyphicon-off';
    const ICON_OK = 'glyphicon-ok';
    const ICON_OK_CIRCLE = 'glyphicon-ok-circle';
    const ICON_OK_SIGN = 'glyphicon-ok-sign';
    const ICON_OPEN = 'glyphicon-open';
    const ICON_PAPERCLIP = 'glyphicon-paperclip';
    const ICON_PAUSE = 'glyphicon-pause';
    const ICON_PENCIL = 'glyphicon-pencil';
    const ICON_PHONE = 'glyphicon-phone';
    const ICON_PHONE_ALT = 'glyphicon-phone-alt';
    const ICON_PICTURE = 'glyphicon-picture';
    const ICON_PLANE = 'glyphicon-plane';
    const ICON_PLAY = 'glyphicon-play';
    const ICON_PLAY_CIRCLE = 'glyphicon-play-circle';
    const ICON_PLUS = 'glyphicon-plus';
    const ICON_PLUS_SIGN = 'glyphicon-plus-sign';
    const ICON_PRINT = 'glyphicon-print';
    const ICON_PUSHPIN = 'glyphicon-pushpin';
    const ICON_QRCODE = 'glyphicon-qrcode';
    const ICON_QUESTION_SIGN = 'glyphicon-question-sign';
    const ICON_RANDOM = 'glyphicon-random';
    const ICON_RECORD = 'glyphicon-record';
    const ICON_REFRESH = 'glyphicon-refresh';
    const ICON_REGISTRATION_MARK = 'glyphicon-registration-mark';
    const ICON_REMOVE = 'glyphicon-remove';
    const ICON_REMOVE_CIRCLE = 'glyphicon-remove-circle';
    const ICON_REMOVE_SIGN = 'glyphicon-remove-sign';
    const ICON_REPEAT = 'glyphicon-repeat';
    const ICON_RESIZE_FULL = 'glyphicon-resize-full';
    const ICON_RESIZE_HORIZONTAL = 'glyphicon-resize-horizontal';
    const ICON_RESIZE_SMALL = 'glyphicon-resize-small';
    const ICON_RESIZE_VERTICAL = 'glyphicon-resize-vertical';
    const ICON_RETWEET = 'glyphicon-retweet';
    const ICON_ROAD = 'glyphicon-road';
    const ICON_SAVE = 'glyphicon-save';
    const ICON_SAVED = 'glyphicon-saved';
    const ICON_SCREENSHOT = 'glyphicon-screenshot';
    const ICON_SD_VIDEO = 'glyphicon-sd-video';
    const ICON_SEARCH = 'glyphicon-search';
    const ICON_SEND = 'glyphicon-send';
    const ICON_SHARE = 'glyphicon-share';
    const ICON_SHARE_ALT = 'glyphicon-share-alt';
    const ICON_SHOPPING_CART = 'glyphicon-shopping-cart';
    const ICON_SIGNAL = 'glyphicon-signal';
    const ICON_SORT = 'glyphicon-sort';
    const ICON_SORT_BY_ALPHABET = 'glyphicon-sort-by-alphabet';
    const ICON_SORT_BY_ALPHABET_ALT = 'glyphicon-sort-by-alphabet-alt';
    const ICON_SORT_BY_ATTRIBUTES = 'glyphicon-sort-by-attributes';
    const ICON_SORT_BY_ATTRIBUTES_ALT = 'glyphicon-sort-by-attributes-alt';
    const ICON_SORT_BY_ORDER = 'glyphicon-sort-by-order';
    const ICON_SORT_BY_ORDER_ALT = 'glyphicon-sort-by-order-alt';
    const ICON_SOUND_5_1 = 'glyphicon-sound-5-1';
    const ICON_SOUND_6_1 = 'glyphicon-sound-6-1';
    const ICON_SOUND_7_1 = 'glyphicon-sound-7-1';
    const ICON_SOUND_DOLBY = 'glyphicon-sound-dolby';
    const ICON_SOUND_STEREO = 'glyphicon-sound-stereo';
    const ICON_STAR = 'glyphicon-star';
    const ICON_STAR_EMPTY = 'glyphicon-star-empty';
    const ICON_STATS = 'glyphicon-stats';
    const ICON_STEP_BACKWARD = 'glyphicon-step-backward';
    const ICON_STEP_FORWARD = 'glyphicon-step-forward';
    const ICON_STOP = 'glyphicon-stop';
    const ICON_SUBTITLES = 'glyphicon-subtitles';
    const ICON_TAG = 'glyphicon-tag';
    const ICON_TAGS = 'glyphicon-tags';
    const ICON_TASKS = 'glyphicon-tasks';
    const ICON_TEXT_HEIGHT = 'glyphicon-text-height';
    const ICON_TEXT_WIDTH = 'glyphicon-text-width';
    const ICON_TH = 'glyphicon-th';
    const ICON_TH_LARGE = 'glyphicon-th-large';
    const ICON_TH_LIST = 'glyphicon-th-list';
    const ICON_THUMBS_DOWN = 'glyphicon-thumbs-down';
    const ICON_THUMBS_UP = 'glyphicon-thumbs-up';
    const ICON_TIME = 'glyphicon-time';
    const ICON_TINT = 'glyphicon-tint';
    const ICON_TOWER = 'glyphicon-tower';
    const ICON_TRANSFER = 'glyphicon-transfer';
    const ICON_TRASH = 'glyphicon-trash';
    const ICON_TREE_CONIFER = 'glyphicon-tree-conifer';
    const ICON_TREE_DECIDUOUS = 'glyphicon-tree-deciduous';
    const ICON_UNCHECKED = 'glyphicon-unchecked';
    const ICON_UPLOAD = 'glyphicon-upload';
    const ICON_USD = 'glyphicon-usd';
    const ICON_USER = 'glyphicon-user';
    const ICON_VOLUME_DOWN = 'glyphicon-volume-down';
    const ICON_VOLUME_OFF = 'glyphicon-volume-off';
    const ICON_VOLUME_UP = 'glyphicon-volume-up';
    const ICON_WARNING_SIGN = 'glyphicon-warning-sign';
    const ICON_WRENCH = 'glyphicon-wrench';
    const ICON_ZOOM_IN = 'glyphicon-zoom-in';
    const ICON_ZOOM_OUT = 'glyphicon-zoom-out';

    protected static $CI;
    protected static $ID;
    protected static $idName = 'Tb_';
    protected static $idNumber = 0;

    public function __construct()
    {
        $this->CI = get_instance();
        $this->CI->load->helper('url');
    }

    public static function passwordField($name, $value = '', $htmlOptions = array())
    {
        return self::inputField(Tb::INPUT_TYPE_PASSWORD, $name, $value, $htmlOptions);
    }

    public static function fileField($name, $value = '', $htmlOptions = array())
    {
        return self::inputField(Tb::INPUT_TYPE_FILE, $name, $value, $htmlOptions);
    }

    public static function emailField($name, $value = '', $htmlOptions = array())
    {
        return self::inputField(Tb::INPUT_TYPE_EMAIL, $name, $value, $htmlOptions);
    }

    public static function textField($name, $value = '', $htmlOptions = array())
    {
        return self::inputField(Tb::INPUT_TYPE_TEXT, $name, $value, $htmlOptions);
    }

    public static function inputField($type, $name, $value, $htmlOptions = array())
    {
        if($type !== Tb::INPUT_TYPE_FILE) {
            self::addCssClass('form-control', $htmlOptions);
        }
        self::addAttributes('type', $type, $htmlOptions);
        self::addAttributes('name', $name, $htmlOptions);
        self::addAttributes('value', $value, $htmlOptions);
        return self::tag('input', $htmlOptions);
    }

    public static function navbar($options = array())
    {
        self::setId();
        $items = self::getValue($options, 'items', array());
        $brandUrl = self::getValue($options, 'brandUrl', '#');
        $brandLabel = self::getValue($options, 'brandLabel', '');
        $brandOptions = self::getValue($options, 'brandOptions', array());
        self::addCssClass('navbar-brand', $brandOptions);
        self::addCssClass('navbar navbar-default', $options);
        self::addAttributes('role', 'navigation', $options);
        $html = self::openTag('nav', $options);
        
        $html .= self::openTag('div', array('class' => 'navbar-header'));
        $html .= self::openTag('button', array('type' => 'button', 'class' => 'navbar-toggle', 'data-toggle' => 'collapse', 'data-target' => '#'.self::getId()));
        $html .= self::tag('span', array('class' => 'sr-only'), 'Toggle navigation');
        $html .= self::tag('span', array('class' => 'icon-bar'), '');
        $html .= self::tag('span', array('class' => 'icon-bar'), '');
        $html .= self::closeTag('button');
        $html .= self::link($brandUrl, $brandLabel, $brandOptions);
        $html .= self::closeTag('div');

        $html .= self::openTag('div', array('class' => 'collapse navbar-collapse', 'id' => self::getId()));
        foreach ($items as $row) {
            if(is_array($row)) {
                self::addCssClass('navbar-nav', $row);
                $html .= self::navs($row);
            } else {
                $html .= $row;
            }
        }
        $html .= self::closeTag('div');
        $html .= self::closeTag('nav');
        return $html;
    }

    public static function breadcrumbs($options = array())
    {
        self::addCssClass('breadcrumb', $options);
        $list = self::getValue($options, 'links', array());
        $html = self::openTag('ol', $options);
        foreach ($list as $key => $value) {
            if(is_string($key)) {
                $html .= self::openTag('li');
                $html .= self::tag('a', array('href' => $value), $key);
                $html .= self::closeTag('li');
            } else {
                $html .= self::tag('li', array('class' => 'active'), $value);
            }
        }
        $html .= self::closeTag('ol');
        return $html;
    }

    public static function navs($options = array())
    {
        self::addCssClass('nav', $options);
        self::changeValue('class', 'type', $options, 'nav-');
        self::changeAttrBool('class', 'stacked', $options, 'nav-stacked nav-pills');
        self::changeAttrBool('class', 'justified', $options, 'nav-justified');
        self::changeValue('class', 'pull', $options, 'navbar-');
        $menu = self::getValue($options, 'items', array());
        $html = self::openTag('ul', $options);
        foreach ($menu as $row) {
            $myoptions = array();
            $linkoptions = array();
            self::changeAttrBool('navactive', 'active', $row, 'active');
            self::changeAttrBool('navdisabled', 'disabled', $row, 'disabled');
            self::moveValue($row, 'url', $linkoptions, 'href', '#');
            self::moveValue($row, 'navactive', $myoptions, 'class', '');
            self::moveValue($row, 'navdisabled', $myoptions, 'class', '');

            $label = self::getValue($row, 'label');
            if(self::getValue($row, 'icon', '', false)) {
                $label = self::icon(self::getValue($row, 'icon')). ' ' .$label;
            }

            if(self::getValue($row, 'items', false, false)) {
                self::addCssClass('dropdown', $myoptions);
                self::addCssClass('dropdown-toggle', $linkoptions);
                self::addAttributes('data-toggle', 'dropdown', $linkoptions);
                $html .= self::openTag('li', $myoptions);
                $html .= self::tag('a', $linkoptions, $label . self::tag('span', array('class' => 'caret'), ''));
                $html .= self::dropdown(self::getValue($row, 'items', array()));
                $html .= self::closeTag('li');                
            } else {  

                if(current_url() === self::getValue($linkoptions, 'href', '#', false)) {
                    self::addCssClass('active', $myoptions);
                }

                $html .= self::openTag('li', $myoptions);
                $html .= self::tag('a', $linkoptions, $label);
                $html .= self::closeTag('li');
            }

        }
        $html .= self::closeTag('ul');
        return $html;
    }

    public static function image($src, $rel = '',  $htmlOptions = array())
    {
        self::changeValue('class', 'type', $htmlOptions, 'img-');
		self::addAttributes('rel', $rel, $htmlOptions);
		self::addAttributes('src', $src, $htmlOptions);
        return self::tag('img', $htmlOptions);
    }

    public static function buttonDropdown($label, $dropdown = array(), $htmlOptions = array())
    {
        $openTagOptions = array();
        self::addCssClass('btn-group', $openTagOptions);
        $menuOption = array();

        if(self::getValue($htmlOptions, 'menuOption', false, false)) {   
            $menuOption = self::getValue($htmlOptions, 'menuOption', array());
        }

        if(self::getValue($htmlOptions, 'dropup', false)) {
            self::addCssClass('dropup', $openTagOptions);
        }

        $html = self::openTag('div', $openTagOptions);
        if(self::getValue($htmlOptions, 'split', false)) {
            $html .= self::button($label, $htmlOptions);
            self::addCssClass('dropdown-toggle', $htmlOptions);
            self::addAttributes('data-toggle', 'dropdown', $htmlOptions);
            $html .= self::button(self::tag('span', array('class' => 'caret'), ''), $htmlOptions);
        } else {
            self::addCssClass('dropdown-toggle', $htmlOptions);
            self::addAttributes('data-toggle', 'dropdown', $htmlOptions);
            $html .= self::button($label .' '. self::tag('span', array('class' => 'caret'), ''), $htmlOptions);
        }

        $html .= self::dropdown($dropdown, $menuOption);
        $html .= self::closeTag('div');
        return $html;
    }


    public static function dropdown($dropdown = array(), $htmlOptions = array())
    {
        self::changeValue('class', 'pull', $htmlOptions, 'pull-');
        self::addCssClass('dropdown-menu', $htmlOptions);
        self::addAttributes('role', 'menu', $htmlOptions);
        $html = self::openTag('ul', $htmlOptions);
        foreach ($dropdown as $row) {
            if($row == '-') {
                $html .= self::openTag('li', array('class' => 'divider'));    
                $html .= self::closeTag('li');
            } else {
                $html .= self::openTag('li');    
                $label = self::getValue($row, 'label');
                $url = self::getValue($row, 'url', '#');
                if(self::getValue($row, 'icon', '', false)) {
                    $label = self::icon(self::getValue($row, 'icon')). ' ' .$label;
                }
                $html .= self::tag('a', array('href' => $url), $label);
                $html .= self::closeTag('li');
            }
        }
        $html .= self::closeTag('ul');
        return $html;
    }

    public static function buttonToolbar($button = array(), $htmlOptions = array())
    {
        self::addCssClass('btn-toolbar', $htmlOptions);
        $html = self::openTag('div', $htmlOptions);
        foreach($button as $row) {
            $html .= self::buttonGroup(self::getValue($row, 'items', array()));
        }
        $html .= self::closeTag('div');
        return $html;
    }

    public static function buttonGroup($button = array(), $htmlOptions = array())
    {
        if(self::getValue($htmlOptions, 'vertical', false, false) === false) {
            self::replaceValue('class', 'type', 'btn-group', $htmlOptions);
            self::changeAttrBool('class', 'justified', $htmlOptions, 'btn-group-justified');
        }
        self::changeAttrBool('class', 'vertical', $htmlOptions, 'btn-group-vertical');
        self::changeValue('class', 'size', $htmlOptions, 'btn-group-');
        self::changeValue('class', 'align', $htmlOptions, 'btn-group-');

        $html = self::openTag('div', $htmlOptions);
        foreach($button as $row) {
            $label = self::getValue($row, 'label');
            if(self::getValue($row, 'items', false, false)) {
                $html .= self::buttonDropdown($label, self::getValue($row, 'items'));
            } else {
                $html .= self::button($label, $row);
            }
        }
        $html .= self::closeTag('div');
        return $html;
    }

    public static function button($label, $htmlOptions = array())
    {
        self::addCssClass('btn', $htmlOptions);
        self::replaceValue('class', 'color', self::BUTTON_COLOR_DEFAULT, $htmlOptions, 'btn-');
        self::changeValue('class', 'size', $htmlOptions, 'btn-');
        self::changeValue('href', 'url', $htmlOptions);
        self::changeAttrBool('class', 'block', $htmlOptions, 'btn-block');
        self::changeAttrBool('disabled', 'disabled', $htmlOptions, 'disabled');

        if(self::getValue($htmlOptions, 'icon', '', false)) {
            $label = self::icon(self::getValue($htmlOptions, 'icon')). ' ' .$label;
        }

        if(self::getValue($htmlOptions, 'type') == 'link') {
            return self::link(self::getValue($htmlOptions, 'href'), $label, $htmlOptions);
        }
        return self::tag('button', $htmlOptions, $label);
    }

    public static function link($url, $title, $htmlOptions = array())
    {
        self::addAttributes('href', $url, $htmlOptions);
        if(self::getValue($htmlOptions, 'icon', '', false)) {
            $title = self::icon(self::getValue($htmlOptions, 'icon')). ' ' .$label;
        }
        return self::tag('a', $htmlOptions, $title);
    }

    public static function code($text, $htmlOptions = array())
    {
        return self::tag('code', $htmlOptions, htmlspecialchars($text));
    }

    public static function codeBlock($text, $htmlOptions = array())
    {
        return self::tag('pre', $htmlOptions, htmlspecialchars($text));
    }

    public static function quote($text, $htmlOptions = array())
    {
        self::changeValue('class', 'pull', $htmlOptions, 'pull-');
        $text = self::p($text);
        if(self::getValue($htmlOptions, 'small', false)) {
            $cite = self::getValue($htmlOptions, 'cite', ''); 
            $small = self::getValue($htmlOptions, 'small', ''); 
            $text .= self::tag('small', array(), $small . ' '. self::tag('cite', array(), $cite));
        }
        return self::tag('blockquote', $htmlOptions, $text); 
    }

    public static function p($text, $htmlOptions = array(), $tag = 'p')
    {
        self::replaceValue('class', 'align', self::TEXT_ALIGN_LEFT, $htmlOptions, 'text-');
        return self::tag($tag, $htmlOptions, $text);
    }

    public static function abbr($text, $title, $htmlOptions = array())
    {
        self::addAttributes('title', $title, $htmlOptions);
        return self::tag('abbr', $htmlOptions, $text);
    }

    public static function em($text, $htmlOptions = array(), $tag = 'p')
    {
        self::changeValue('class', 'color', $htmlOptions, 'text-');
        return self::tag($tag, $htmlOptions, $text);
    }

    public static function lead($text, $htmlOptions = array())
    {
        self::addCssClass('lead', $htmlOptions);
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

    protected static function tag($tag, $htmlOptions = array(), $content = false, $closeTag = true)
    {
        $html = '<'. $tag . self::parseAttributes($htmlOptions);
        if($content === false) {
            $html .= $closeTag ? ' />' : '>';
        } else {
            $html .= $closeTag ? '>'. $content . self::closeTag($tag)  : '>'. $content;
        }
        $html .= ' ';
        return $html;
    }

    protected static function openTag($tag, $htmlOptions = array())
    {
        return self::tag($tag, $htmlOptions, false, false);
    }

    protected static function closeTag($tag)
    {
        return '</'. $tag .'>';
    }

    protected static function parseAttributes($htmlOptions = array())
    {
        $html = '';
        foreach ($htmlOptions as $key => $value) {
            if(is_bool($value)) {
                $html .= ' '. $key;
            } else {
                $html .= ' '. $key .'="'. $value .'"';
            }
        }
        return $html;
    }

    protected static function addAttributes($attr, $value, array &$htmlOptions)
    {
        if($attr && $value) {
            if(isset($htmlOptions[$attr])) {
                $htmlOptions[$attr] .= ' '. $value;
            } else {
                $htmlOptions[$attr] = $value;
            }
        }
    }

    protected static function addCssClass($class, array &$htmlOptions)
    {
        self::addAttributes('class', $class, $htmlOptions);
    }

    protected static function addCssId($id, array &$htmlOptions)
    {
        self::addAttributes('id', $id, $htmlOptions);
    }

    protected static function changeAttrBool(
		$attr, 
		$key, 
		array &$htmlOptions, 
		$ifTrue
	) {
        if(isset($htmlOptions[$key]) && $htmlOptions[$key] == true) {
            self::addAttributes($attr, $ifTrue, $htmlOptions);
            if($attr !== $key) {
                self::remove($key, $htmlOptions);
            }
        }
    }

    protected static function replaceValue(
		$key, 
		$value, 
		$default, 
		array &$htmlOptions, 
		$preffix = '', 
		$suffix = ''
	) {
        if(!isset($htmlOptions[$value])) {
            $htmlOptions[$value] = $default;
        }
        self::changeValue($key, $value, $htmlOptions, $preffix, $suffix);
    }

    protected static function moveValue(array &$before, $key1, array &$after, $key2, $ifNull = '')
    {
        $value = self::getValue($before, $key1, $ifNull);
        self::addAttributes($key2, $value, $after);
    }

    protected static function changeValue(
		$key, 
		$value, 
		array &$htmlOptions, 
		$preffix = '', 
		$suffix = ''
	) {
        $val = self::getValue($htmlOptions, $value);
        if($val !== '') {
            self::addAttributes($key, $preffix . $val . $suffix, $htmlOptions);
        }
    }

    protected static function getValue(array &$array, $attr, $ifNull = '', $unset = true)
    {
        $val = isset($array[$attr]) ? $array[$attr] : $ifNull;
        if($unset === true) {
            self::remove($attr, $array);
        }
        return $val;
    }

    protected static function remove($string, array &$array)
    {
        unset($array[$string]);
    }

    protected static function getId()
    {
        return self::$ID;
    }

    protected static function setId()
    {
        self::$ID = self::$idName . self::$idNumber ++;
    }
}

class Tb extends Bootstrap{}