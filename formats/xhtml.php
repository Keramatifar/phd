<?php
/*  $Id$ */
class PhDXHTMLFormat extends PhDFormat {
    private $simpleName = "XHTML";
    private $myelementmap = array( /* {{{ */
        'abstract'              => 'div', /* Docbook-xsl prints "abstract"... */
        'abbrev'                => 'abbr',
        'acronym'               => 'acronym',
        'affiliation'           => 'format_suppressed_tags',
        'alt'                   => 'format_suppressed_tags',
        'article'               => 'format_container_chunk_top',
        'author'                => array(
            /* DEFAULT */          'format_author',
            'authorgroup'       => 'format_authorgroup_author',
        ),
        'authorgroup'           => 'div',
        'appendix'              => 'format_container_chunk_top',
        'application'           => 'span',
        'blockquote'            => 'blockquote',
        'bibliography'          => array(
            /* DEFAULT */          'div',
            'article'           => 'format_chunk',
            'book'              => 'format_chunk',
            'part'              => 'format_chunk',
        ),
        'book'                  => 'format_container_chunk_top',
        'chapter'               => 'format_container_chunk_top',
        'citetitle'             => 'i',
        'co'                    => 'format_co',
        'colophon'              => 'format_chunk',
        'copyright'             => 'format_copyright',
        'date'                  => 'p',
        'editor'                => 'format_editor',
        'function'              => 'b',
        'email'                 => 'format_suppressed_tags',
        'firstname'             => 'format_name',
        'footnote'              => 'format_footnote',
        'footnoteref'           => 'format_footnoteref',
        'funcdef'               => 'format_suppressed_tags',
        'funcsynopsis'          => 'div',
        'funcsynopsisinfo'      => 'pre',
        'function'				=> 'span',
        'funcprototype'         => 'code',
        'surname'               => 'format_name',
        'othername'             => 'format_name',
        'optional'              => 'span',
        'honorific'             => 'span',
        'glossary'              => array(
            /* DEFAULT */          'div',
            'article'           => 'format_chunk',
            'book'              => 'format_chunk',
            'part'              => 'format_chunk',
        ),
        'calloutlist'           => 'format_calloutlist',
        'callout'               => 'format_callout',
        'caution'               => 'format_admonition',
        'citation'              => 'format_citation',
        'citerefentry'          => 'span',
        'classname'             => array(
            /* DEFAULT */          'span',
            'ooclass'           => array(
                /* DEFAULT */      'b',
                'classsynopsisinfo' => 'format_classsynopsisinfo_ooclass_classname',
            ),
        ),
        'classsynopsis'         => 'format_classsynopsis',
        'classsynopsisinfo'     => 'format_classsynopsisinfo',
        'code'                  => 'code',
        'collab'                => 'span',
        'collabname'            => 'span',
        'contrib'               => 'format_suppressed_tags',
        'colspec'               => 'format_colspec',
        'command'               => 'strong',
        'computeroutput'        => 'span',
        /* FIXME: This is one crazy stupid workaround for footnotes */
        'constant'              => array(
            /* DEFAULT */          'format_constant',
            'para'              => array(
                /* DEFAULT */      'format_constant',
                'footnote'      => 'format_footnote_constant',
            ),
        ),
        'constructorsynopsis'   => 'format_methodsynopsis',
        'destructorsynopsis'    => 'format_methodsynopsis',
        'emphasis'              => 'em',
        'enumname'              => 'span',
        'entry'                 => array (
            /* DEFAULT */          'format_entry',
            'row'               => array(
                /* DEFAULT */      'format_entry',
                'thead'         => 'format_th_entry',
                'tfoot'         => 'format_th_entry',
                'tbody'         => 'format_entry',
            ),
        ),
        'envar'                 => 'span',
        'errortype'             => 'span',
        'errorcode'             => 'span',
        'example'               => 'div',
        'phpdoc:exception'      => 'format_exception_chunk',
        'formalpara'            => 'p',
        'fieldsynopsis'         => array(
            /* DEFAULT */          'format_fieldsynopsis',
            'entry'             => 'div',
        ),
        'figure'                => 'div',
        'filename'              => 'var',
        'glossentry'            => 'li',
        'glossdef'              => 'p',
        'glosslist'             => 'ul',
        'glossterm'             => 'span',
        'holder'                => 'span',
        'imageobject'           => 'div',
        'imagedata'             => 'format_imagedata',
        'important'             => 'format_admonition',
        'index'                 => array(
            /* DEFAULT */          'div',
            'article'           => 'format_chunk',
            'book'              => 'format_chunk',
            'part'              => 'format_chunk',
        ),
        'info'                  => array(
            /* DEFAULT */         'div',
            'note'              => 'span',
        ),
        'informalexample'       => 'div',
        'informaltable'         => 'table',
        'indexdiv'              => 'dl',
        'indexentry'            => 'dd',
        'initializer'           => 'format_initializer',
        'itemizedlist'          => 'ul',
        'legalnotice'           => 'format_chunk',
        'listitem'              => array(
            /* DEFAULT */          'li',
            'varlistentry'      => 'format_varlistentry_listitem',
        ),
        'link'                  => 'a',
        'literal'               => 'format_literal',
        'literallayout'         => 'pre',
        'link'                  => 'format_link',
        'xref'                  => 'format_xref',
        'manvolnum'             => 'format_manvolnum',
        'mediaobject'           => 'format_mediaobject',
        'methodparam'           => 'format_methodparam',
        'methodsynopsis'        => 'format_methodsynopsis',
        'methodname'            => 'format_methodname',
        'member'                => 'li',
        'modifier'              => 'span',
        'note'                  => 'format_note',
        'orgname'               => 'span',
        'othercredit'           => 'div',
        'ooclass'               => array(
            /* DEFAULT */          'span',
            'classsynopsis'     => 'div',
        ),
        'oointerface'           => array(
            /* DEFAULT */          'span',
            'classsynopsisinfo'    => 'format_classsynopsisinfo_oointerface',
        ),
        'interfacename'         => 'span',
        'option'                => 'span',
        'orderedlist'           => 'ol',
        'para'                  => array(
            /* DEFAULT */          'p',
            'example'           => 'format_example_content',
            'note'              => 'format_note_content',
            'footnote'          => 'format_footnote_para',
            'refsect1'          => 'format_refsect1_para',
            'question'          => 'format_suppressed_tags',
        ),
        'paramdef'              => 'format_suppressed_tags',
        'parameter'             => array(
            /* DEFAULT */          'format_parameter',
            'methodparam'       => 'format_methodparam_parameter',
        ),
        'part'                  => 'format_container_chunk_top',
        'partintro'             => 'div',
        'personname'            => 'format_personname',
        'personblurb'           => 'div',
        'phrase'                => 'span',
        'preface'               => 'format_chunk',
        'primaryie'             => 'format_suppressed_tags',
        'procedure'             => 'format_procedure',
        'productname'           => 'span',
        'programlisting'        => 'format_programlisting',
        'prompt'                => 'span',
        'propname'              => 'span',
        'property'              => array(
            /* DEFAULT */          'span',
            'classsynopsisinfo' => 'format_varname',
        ),
        'proptype'              => 'span',
        'pubdate'               => 'div', /* Docbook-XSL prints "published" */
        'refentry'              => 'format_chunk',
        'refentrytitle'         => 'span',
        'refpurpose'            => 'p',
        'reference'             => 'format_container_chunk_below',
        'refsect1'              => 'format_refsect',
        'refsect2'              => 'format_refsect',
        'refsect3'              => 'format_refsect',
        'refsynopsisdiv'        => 'div',
        'refname'               => 'h1',
        'refnamediv'            => 'div',
        'releaseinfo'           => 'div',
        'replaceable'           => 'span',
        'row'                   => 'format_row',
        'screen'                => 'format_screen',
        'sect1'                 => 'format_section_chunk',
        'sect2'                 => 'div',
        'sect3'                 => 'div',
        'sect4'                 => 'div',
        'sect5'                 => 'div',
        'section'               => array(
            /* DEFAULT */          'div',
            'sect1'                => 'format_section_chunk',
            'preface'              => 'format_section_chunk',
            'chapter'              => 'format_section_chunk',
            'appendix'             => 'format_section_chunk',
            'article'              => 'format_section_chunk',
            'part'                 => 'format_section_chunk',
            'reference'            => 'format_section_chunk',
            'refentry'             => 'format_section_chunk',
            'index'                => 'format_section_chunk',
            'bibliography'         => 'format_section_chunk',
            'glossary'             => 'format_section_chunk',
            'colopone'             => 'format_section_chunk',
            'book'                 => 'format_section_chunk',
            'set'                  => 'format_section_chunk',
            'setindex'             => 'format_section_chunk',
            'legalnotice'          => 'format_section_chunk',
        ),
        'seg'                   => 'format_seg',
        'segmentedlist'         => 'format_segmentedlist',
        'seglistitem'           => 'format_seglistitem',
        'segtitle'              => 'format_suppressed_tags',
        'set'                   => 'format_container_chunk_top',
        'setindex'              => 'format_chunk',
        'shortaffil'            => 'format_suppressed_tags',
        'simplelist'            => 'ul', /* FIXME: simplelists has few attributes that need to be implemented */
        'simpara'               => array(
            /* DEFAULT */          'p',
            'note'              => 'span',
            'listitem'          => 'span',
            'entry'             => 'span',
            'example'           => 'format_example_content',
        ),
        'spanspec'              => 'format_suppressed_tags',
        'step'                  => 'format_step',
        'superscript'           => 'sup',
        'subscript'             => 'sub',
        'systemitem'            => 'format_systemitem',
        'symbol'                => 'span',
        'synopsis'              => 'pre',
        'tag'                   => 'code',
        'table'                 => 'format_table',
        'term'                  => 'format_term',
        'tfoot'                 => 'format_th',
        'tbody'                 => 'format_tbody',
        'thead'                 => 'format_th',
        'tgroup'                => 'format_tgroup',
        'tip'                   => 'format_admonition',
        'title'                 => array(
            /* DEFAULT */          'h1',
            'example'           => 'format_example_title',
            'formalpara'        => 'h5',
            'info'              => array(
                /* DEFAULT */      'h1',
                'example'       => 'format_example_title',
                'note'          => 'format_note_title',
                'table'         => 'format_table_title',
                'informaltable' => 'format_table_title',

                'article'       => 'format_container_chunk_top_title',
                'appendix'      => 'format_container_chunk_top_title',
                'book'          => 'format_container_chunk_top_title',
                'chapter'       => 'format_container_chunk_top_title',
                'part'          => 'format_container_chunk_top_title',
                'set'           => 'format_container_chunk_top_title',

            ),
            'indexdiv'          => 'dt',
            'legalnotice'       => 'h4',
            'note'              => 'format_note_title',
            'procedure'         => 'b',
            'refsect1'          => 'h3',
            'refsect2'          => 'h4',
            'refsect3'          => 'h5',
            'section'           => 'h2',
            'sect1'             => 'h2',
            'sect2'             => 'h3',
            'sect3'             => 'h4',
            'sect4'             => 'h5',
            'segmentedlist'     => 'strong',
            'table'             => 'format_table_title',
            'variablelist'      => 'strong',
            'article'           => 'format_container_chunk_top_title',
            'appendix'          => 'format_container_chunk_top_title',
            'book'              => 'format_container_chunk_top_title',
            'chapter'           => 'format_container_chunk_top_title',
            'part'              => 'format_container_chunk_top_title',
            'set'               => 'format_container_chunk_top_title',
        ),
        'titleabbrev'           => 'format_suppressed_tags',
        'type'                  => 'span',
        'userinput'             => 'format_userinput',
        'variablelist'          => 'format_variablelist',
        'varlistentry'          => 'format_varlistentry',
        'varname'               => array(
            /* DEFAULT */          'var',
            'fieldsynopsis'     => 'format_fieldsynopsis_varname',
        ),
        'void'                  => 'format_void',
        'warning'               => 'format_admonition',
        'xref'                  => 'format_xref',
        'year'                  => 'span',
        'quote'                 => 'format_quote',
        'qandaset'              => 'format_qandaset',
        'qandaentry'            => 'dl',
        'question'              => array(
            /* DEFAULT */          'format_question',
            'questions'         => 'format_phd_question', // From the PhD namespace
        ),
        'questions'             => 'ol', // From the PhD namespace
        'answer'                => 'dd',
    ); /* }}} */
    private $mytextmap = array(
        'segtitle'             => 'format_segtitle_text',
        'affiliation'          => 'format_suppressed_text',
        'contrib'              => 'format_suppressed_text',
        'shortaffil'           => 'format_suppressed_text',
        'titleabbrev'          => 'format_suppressed_text',
        'programlisting'       => 'format_programlisting_text',
        'alt'                  => 'format_alt_text',
        'modifier'             => array(
            /* DEFAULT */         false,
            'fieldsynopsis'    => 'format_fieldsynopsis_modifier_text',
        ),
        'classname'            => array(
            /* DEFAULT */         false,
            'ooclass'          => array(
                /* DEFAULT */     false,
                'classsynopsis' => 'format_classsynopsis_ooclass_classname_text',
            ),
        ),
        'para'                  => array(
            /* DEFAULT */          false,
            'footnote'             => 'format_footnote_para_text',
        ),
        /* FIXME: This is one crazy stupid workaround for footnotes */
        'constant'              => array(
            /* DEFAULT */          false,
            'para'              => array(
                /* DEFAULT */      false,
                'footnote'      => 'format_footnote_constant_text',
            ),
        ),
        'literal'               => 'format_literal_text',
        'email'                 => 'format_email_text',

    );


    public $role        = false;
    /* Current Chunk variables */
    protected $cchunk      = array();
    /* Default Chunk variables */
    protected $dchunk      = array(
        "classsynopsis"            => array(
            "close"                         => false,
            "classname"                     => false,
        ),
        "classsynopsisinfo"        => array(
            "implements"                    => false,
            "ooclass"                       => false,
        ),
        "examples"                 => 0,
        "fieldsynopsis"            => array(
            "modifier"                      => "public",
        ),
        "co"                       => 0,
        "callouts"                 => 0,
        "segmentedlist"            => array(
            "seglistitem"                   => 0,
            "segtitle"                      => array(
            ),
        ),
        "table"                    => false,
        "procedure"                => false,
        "mediaobject"              => array(
            "alt"                           => false,
        ),
        "footnote"                 => array(
        ),
        "tablefootnotes"           => array(
        ),
    );

    protected $flags;
    protected $ext = "html";
    protected $fp = array();
    protected $outputdir = __DIR__;
    public function __construct() {
        parent::__construct();
        parent::registerFormatName($this->simpleName);
    }
    public function transformFromMap($open, $tag, $name, $attrs, $props) {
        if ($open) {
            $idstr = "";
            if (isset($attrs[PhDReader::XMLNS_XML]["id"])) {
                $id = $attrs[PhDReader::XMLNS_XML]["id"];
                $idstr = ' id="' .$id. '" name="' .$id. '"';
            }
            return '<' .$tag. ' class="' .$name. '"' . $idstr . ($props["empty"] ? '/' : "") . '>';
        }
        return '</' .$tag. '>';
    }

    public function appendData($data) {
    	if ($this->appendToBuffer) {
    		$this->buffer .= $data;
    		return;
    	} elseif ($this->flags & PhDRender::CLOSE) {
            $fp = array_pop($this->fp);
            fwrite($fp, $data);
            $this->writeChunk($this->CURRENT_CHUNK, $fp);
            fclose($fp);

            $this->flags ^= PhDRender::CLOSE;
        } elseif ($this->flags & PhDRender::OPEN) {
            $this->fp[] = $fp = fopen("php://temp/maxmemory", "r+");
            fwrite($fp, $data);

            $this->flags ^= PhDRender::OPEN;
        } else {
            $fp = end($this->fp);
            fwrite($fp, $data);
        }
    }
    public function header($id) {
        $title = $this->getLongDescription($id);
        $lang = $this->CURRENT_LANG;

        $prev = $next = $parent = array("href" => null, "desc" => null);
        
        if ($parentId = $this->getParent($id)) {
            $parent = array("href" => $this->getFilename($parentId) . '.' .$this->ext,
                "desc" => $this->getShortDescription($parentId));
        }
        if ($prevId = PhDFormat::getPrevious($id)) {
            $prev = array("href" => PhDFormat::getFilename($prevId) . '.' .$this->ext,
                "desc" => $this->getShortDescription($prevId));
        }
        if ($nextId = PhDFormat::getNext($id)) {
            $next = array("href" => PhDFormat::getFilename($nextId) . '.' .$this->ext,
                "desc" => $this->getShortDescription($nextId));
        }
        $navBar = $this->createNavBar($id);
        return
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .$lang. '" lang="' .$lang. '">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PHP: '.$title.'</title>
</head>
<body>
<table width="100%">
    <tr valign="top">
        <td style="font-size: smaller;" width="15%">
'.$navBar.'
        </td>
        <td width="85%">
            <div style="text-align: center;">
                '.($prevId ? '<div class="prev" style="text-align: left; float: left;"><a href="' .$prev["href"]. '">' .$prev["desc"]. '</a></div>' : '') .'
                '.($nextId ? '<div class="next" style="text-align: right; float: right;"><a href="' .$next["href"]. '">' .$next["desc"].'</a></div>' : '') .'
                '.($parentId ? '<div class="up"><a href="' .$parent["href"]. '">' .$parent["desc"]. '</a></div>' : '') .'
                <div class="home"><a href="index.html">PHP Manual</a></div>
            </div><hr/>
';
    }
    public function footer($id) {
        return "\n        </td>\n    </tr>\n</table>\n</body>\n</html>\n";
    }
    public function writeChunk($id, $fp) {
        $filename = $this->outputdir . $id . '.' .$this->ext;

        rewind($fp);
        file_put_contents($filename, $this->header($id));
        file_put_contents($filename, $fp, FILE_APPEND);
        file_put_contents($filename, $this->footer($id), FILE_APPEND);
    }
    public function close() {
        foreach ($this->fp as $fp) {
            fclose($fp);
        }
    }
    public function createLink($for, &$desc = null, $type = PhDFormat::SDESC) {
        $retval = null;
        if (isset($this->idx[$for])) {
            $rsl = $this->idx[$for];
            $retval = $rsl["filename"] . "." . $this->ext . '#' . $rsl["docbook_id"];
            $desc = $rsl["sdesc"] ?: $rsl["ldesc"];
        }
        return $retval;
    }

    protected function createTOC(SQLite3Result $result, $lang) {
        $empty = true;
    	$toc = '<h2>' . $this->autogen('toc', $lang) . '</h2><ol>';
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $empty = false;
        	$long = $this->parse($row["ldesc"]);
            $short = $row["sdesc"];
            $link = $this->createLink($row["docbook_id"]);
            
            $list = "";
            if ($this->cchunk["name"] === "book" || $this->cchunk["name"] === "set") {
                $childrens = $this->sqlite->query("SELECT docbook_id, filename, sdesc, ldesc FROM ids WHERE parent_id='{$row["docbook_id"]}' AND filename=docbook_id");
                if ($childrens) {
                    $list = "<ol>";
                    while ($child = $childrens->fetchArray(SQLITE3_ASSOC)) {
                        $childLong = $this->parse($child["ldesc"]);
                        $childShort = $child["sdesc"];
                    	
                        $href = $this->createLink($child["docbook_id"]);
                        if ($childLong && $childShort && $childLong != $childShort) {
                            $list .= '<li><a href="' . $href . '">' . $childShort . '</a> — ' . $childLong . "</li>\n";
                        } else {
                            $list .= '<li><a href="' . $href . '">' . ($childLong ?: $childShort) . '</a>' . "</li>\n";
                        }
                    }
                    $list .="</ol>";
                }
            }
            if ($long && $short && $long != $short) {
                $toc .= '<li><a href="' . $link . '">' . $short . '</a> — ' . $long . $list . "</li>\n";
            } else {
                $toc .= '<li><a href="' . $link . '">' . ($long ?: $short) . '</a>' . $list .  "</li>\n";
            }
        }
        $toc .= "</ol>\n";
        if ($empty)
            return "";
        else return $toc;
    }

    protected function createNavBar($id) {
        $navBar =  '<style type="text/css">
#leftbar {
	float: left;
	width: 186px;
	padding: 5px;
	font-size: smaller;
}
ul.toc {
	margin: 0px 5px 5px 5px;
	padding: 0px;
}
ul.toc li {
	font-size: 85%;
	margin: 1px 0 1px 1px;
	padding: 1px 0 1px 11px;
	list-style-type: none;
	background-repeat: no-repeat;
	background-position: center left;
}
ul.toc li.header {
	font-size: 115%;
	padding: 5px 0px 5px 11px;
	border-bottom: 1px solid #cccccc;
	margin-bottom: 5px;
}
ul.toc li.active {
	font-weight: bold;
}
ul.toc li a {
	text-decoration: none;
}
ul.toc li a:hover {
	text-decoration: underline;
}
</style>
 <ul class="toc">
  <li class="header home"><a href="index.'.$this->ext.'">PHP Manual</a></li>
';
        // Fetch ancestors of the current node
        $ancestors = array();
        $currentId = $id;
        while (($currentId = $this->getParent($currentId)) && $currentId != "index") {
            $desc = "";
            $link = $this->createLink($currentId, $desc);
            $ancestors[] = array("desc" => $desc, "link" => $link);
        }
        // Show them from the root to the closest parent
        foreach (array_reverse($ancestors) as $ancestor) {
        	$navBar .= "  <li class=\"header up\"><a href=\"{$ancestor["link"]}\">{$ancestor["desc"]}</a></li>\n";
        }
        // Fetch siblings of the current node
        $parent = $this->getParent($id);
        $childrens = $this->sqlite->query("SELECT docbook_id FROM ids WHERE parent_id='$parent'");
        while ($child = $childrens->fetchArray(SQLITE3_ASSOC)) {
            $desc = "";
            $link = $this->createLink($child["docbook_id"], $desc);
            $active = ($id === $child["docbook_id"]);
            $navBar .= "  <li" .($active ? " class=\"active\"" : ""). "><a href=\"$link\">$desc</a></li>\n";
        }
        return $navBar . " </ul>\n";
    }

    public function CDATA($str) {
        switch($this->role) {
        case "php":
            return '<div class="phpcode">' .(highlight_string(trim($str), 1)). '</div>';
            break;
        default:
            return '<div class="cdata"><pre>' .(htmlspecialchars($str, ENT_QUOTES, "UTF-8")). '</pre></div>';
        }
    }
    public function TEXT($str) {
        return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
    }
    public function UNDEF($open, $name, $attrs, $props) {
        if ($open) {
            trigger_error("No mapper found for '{$name}'", E_USER_WARNING);
        }
    }

    public function admonition_title($title, $lang) {
        return '<b class="' .(strtolower($title)). '">' .($this->autogen($title, $lang)). '</b>';
    }
    public function getDefaultElementMap() {
        return $this->myelementmap;
    }
    public function getDefaultTextMap() {
        return $this->mytextmap;
    }
    public function update($event, $val = null) {
        switch($event) {
        case PhDRender::CHUNK:
            $this->flags = $val;
            break;

        case PhDRender::STANDALONE:
            if ($val) {
                $this->registerElementMap(static::getDefaultElementMap());
                $this->registerTextMap(static::getDefaultTextMap());
            }
            break;

        case PhDRender::INIT:
            $this->outputdir = $tmp = PhDConfig::output_dir() . strtolower($this->getFormatName()) . '/';
            if (file_exists($tmp)) {
                if (!is_dir($tmp)) {
                    v("Output directory is a file?", E_USER_ERROR);
                }
            } else {
                if (!mkdir($tmp)) {
                    v("Can't create output directory", E_USER_ERROR);
                }
            }
            break;
        case PhDRender::VERBOSE:
        	v("Starting %s rendering", $this->getFormatName(), VERBOSE_FORMAT_RENDERING);
        	break;
        }
    }

    public function getChunkInfo() {
        return $this->cchunk;
    }

    public function format_suppressed_tags($open, $name, $attrs, $props) {
        /* Ignore it */
        return "";
    }
    public function format_suppressed_text($value, $tag) {
        /* Suppress any content */
        return "";
    }

    public function format_link($open, $name, $attrs, $props) {
        $link = null;
        if ($open) {
            $link = $class = $content = "";

            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["linkend"])) {
                $link = $this->createLink($attrs[PhDReader::XMLNS_DOCBOOK]["linkend"]);
            }
            elseif (isset($attrs[PhDReader::XMLNS_XLINK]["href"])) {
                $link = $attrs[PhDReader::XMLNS_XLINK]["href"];
                $class = " external";
                $content = "&raquo; ";
            }
            if ($props["empty"]) {
                $content .= $link ."</a>\n";
            }

            return '<a href="' . $link . '" class="' . $name . $class . '">' . $content;
        }
        return "</a>";
    }
    public function format_xref($open, $name, $attrs, $props) {
        if ($open) {
            $desc = "";
            $link = $this->createLink($attrs[PhDReader::XMLNS_DOCBOOK]["linkend"], $desc);

            $ret = '<a href="' .$link. '" class="' .$name. '">' .$desc;

            if ($props["empty"]) {
                return $ret. "</a>";
            }
            return $ret;
        }
        return "</a>";
    }
    public function format_literal($open, $name, $attrs) {
        if ($open) {
            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                $this->role = $attrs[PhDReader::XMLNS_DOCBOOK]["role"];
            } else {
                $this->role = false;
            }
            return '<i>';
        }
        $this->role = false;
        return '</i>';
    }
    public function format_literal_text($value, $tag) {
        switch ($this->role) {
            case 'infdec':
                $value = (float)$value;
                $p = strpos($value, '.');
                $str = substr($value, 0, $p + 1);
                $str .= '<span style="text-decoration: overline;">';
                $str .= substr($value, $p + 1);
                $str .= '</span>';
                return $str;
            default:
                return $this->TEXT($value);
        }
    }

    public function format_copyright($open, $name, $attrs) {
        if ($open) {
            return '<div class="'.$name.'">&copy; ';
        }
        return '</div>';
    }
    public function format_author($open, $name, $attrs, $props) {
        if ($open) {
            return '<div class="' .$name. ' vcard">';
        }
        return "</div>";
    }
    public function format_personname($open, $name, $attrs, $props) {
        if ($open) {
            return '<span class="' .$name. ' fn">';
        }
        return "</span>";
    }
    public function format_name($open, $name, $attrs) {
        if ($open) {
            $class = "";
            switch($name) {
            case "firstname":
                $class = " given-name";
                break;

            case "surname":
                $class = " family-name";
                break;

            case "othername":
                if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                    /* We might want to add support for other roles */
                    switch($attrs[PhDReader::XMLNS_DOCBOOK]["role"]) {
                    case "nickname":
                        $class = " nickname";
                        break;
                    }
                }
                break;
            }

            return ' <span class="' . $name . $class . '">';
        }
        return '</span> ';
    }

    public function format_container_chunk_top($open, $name, $attrs, $props) {
        $this->cchunk = $this->dchunk;
        $this->cchunk["name"] = $name;
        if(isset($attrs[PhDReader::XMLNS_XML]["id"])) {
            $id = $attrs[PhDReader::XMLNS_XML]["id"];
        } else {
            $id = uniqid("phd");
        }

        if ($open) {
       		if (!NO_SQLITE) {
                $this->CHILDRENS = $this->sqlite->query("SELECT docbook_id, filename, sdesc, ldesc FROM ids WHERE parent_id='$id' AND filename=docbook_id");
            }
            
            $this->CURRENT_CHUNK = $id;
            $this->notify(PhDRender::CHUNK, PhDRender::OPEN);

            return '<div id="' .$id. '" class="' .$name. '">';
        }

        $this->CURRENT_CHUNK = $id;
        $this->notify(PhDRender::CHUNK, PhDRender::CLOSE);

        $toc = "";
        if (!NO_SQLITE && !in_array($id, $this->TOC_WRITTEN)) {
            $result = $this->sqlite->query("SELECT docbook_id, filename, sdesc, ldesc FROM ids WHERE parent_id='$id'");
            $toc = $this->createTOC($result, $props["lang"]);
        }
        return $toc."</div>";
    }
    public function format_container_chunk_top_title($open, $name, $attrs, $props) {
        if ($open) {
            return '<h1>';
        }

        $id = $this->CURRENT_CHUNK;
        if (!NO_SQLITE) {
            $this->CHILDRENS = $result = $this->sqlite->query("SELECT docbook_id, filename, sdesc, ldesc FROM ids WHERE parent_id='$id'");
            $toc = $this->createTOC($result, $props["lang"]);
        } else {
            $this->CHILDRENS = array();
            $toc = "";
        }
        $this->TOC_WRITTEN[] = $id;

        return '</h1>'.$toc;
    }
    public function format_container_chunk_below($open, $name, $attrs, $props) {
        $this->cchunk = $this->dchunk;
        $this->cchunk["name"] = $name;
        if(isset($attrs[PhDReader::XMLNS_XML]["id"])) {
            $id = $attrs[PhDReader::XMLNS_XML]["id"];
        } else {
            /* FIXME: This will obviously not exist in the db.. */
            $id = uniqid("phd");
        }

        if ($open) {
            $this->CURRENT_CHUNK = $id;
            $this->notify(PhDRender::CHUNK, PhDRender::OPEN);

            return '<div id="' .$attrs[PhDReader::XMLNS_XML]["id"]. '" class="' .$name. '">';
        }

        $toc = '<ol>';
        $desc = "";
        $rsl = $this->CHILDRENS;
    	if (!NO_SQLITE && !in_array($id, $this->TOC_WRITTEN)) {
            $result = $this->sqlite->query("SELECT docbook_id, filename, sdesc, ldesc FROM ids WHERE parent_id='$id'");
            $toc = $this->createTOC($result, $props["lang"]);
        }
        $toc .= "</ol>\n";

        $this->CURRENT_CHUNK = $id;
        $this->notify(PhDRender::CHUNK, PhDRender::CLOSE);
        return $toc . '</div>';
    }
    public function format_exception_chunk($open, $name, $attrs, $props) {
        return $this->format_container_chunk_below($open, "reference", $attrs, $props);
    }
    public function format_section_chunk($open, $name, $attrs, $props) {
        static $a = array();
        if ($open) {
            $a[] = $props["sibling"];
            if ($props["sibling"] === $name) {
                return $this->format_chunk($open, $name, $attrs, $props);
            }
            return $this->transformFromMap($open, "div", $name, $attrs, $props);
        }
        $x = array_pop($a);
        if ($x == $name) {
                return $this->format_chunk($open, $name, $attrs, $props);
        }
        $a[] = $x;
        return $this->transformFromMap($open, "div", $name, $attrs, $props);
    }
    public function format_chunk($open, $name, $attrs, $props) {
        if ($open) {
            $this->cchunk = $this->dchunk;
            if(isset($attrs[PhDReader::XMLNS_XML]["id"])) {
                $id = $attrs[PhDReader::XMLNS_XML]["id"];
            } else {
                $id = uniqid("phd");
            }

            $class = $name;
            if ($name === "refentry") {
                //$class .= " -rel-posting";
            }

            $this->CURRENT_CHUNK = $id;
            $this->CURRENT_LANG  = $props["lang"];

            $this->notify(PhDRender::CHUNK, PhDRender::OPEN);
            return '<div id="' .$id. '" class="' .$class. '">';
        }
        $this->notify(PhDRender::CHUNK, PhDRender::CLOSE);

        $str = "";
        foreach ($this->cchunk["footnote"] as $k => $note) {
            $str .= '<div class="footnote">';
            $str .= '<a name="fnid' .$note["id"]. '" href="#fn' .$note["id"]. '"><sup>[' .($k + 1). ']</sup></a>';
            $str .= $note["str"];
            $str .= "</div>\n";
        }
        $this->cchunk["footnote"] = $this->dchunk["footnote"];

        return $str. "</div>";
    }
    public function format_refsect1_para($open, $name, $attrs, $props) {
        if ($open) {
            switch ($props["sibling"]) {
            case "methodsynopsis":
            case "constructorsynopsis":
            case "destructorsynopsis":
                return '<p class="'.$name.' rdfs-comment">';
                break;

            default:
                return '<p class="'.$name.'">';
            }

        }
        return '</p>';
    }
    public function format_refsect($open, $name, $attrs) {
        if ($open) {
            if(!isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                $attrs[PhDReader::XMLNS_DOCBOOK]["role"] = "unknown";
            }
            $this->role = $role = $attrs[PhDReader::XMLNS_DOCBOOK]["role"];
            return '<div class="' .$name.' ' .$role. '">';
        }
        $this->role = null;
        return "</div>\n";
    }

    public function format_classsynopsisinfo_oointerface($open, $name, $attrs) {
        if ($open) {
            if ($this->cchunk["classsynopsisinfo"]["implements"] === false) {
                $this->cchunk["classsynopsisinfo"]["implements"] = true;
                return '<span class="'.$name.'">implements ';
            }
            return '<span class="'.$name.'">, ';
        }

        return "</span>";
    }
    public function format_classsynopsisinfo_ooclass_classname($open, $name, $attrs) {
        if ($open) {
            if ($this->cchunk["classsynopsisinfo"]["ooclass"] === false) {
                $this->cchunk["classsynopsisinfo"]["ooclass"] = true;
                return ' class <b class="'.$name.'">';
            }
            return '<b class="'.$name.'"> ';
        }
        return "</b>";
    }
    public function format_classsynopsisinfo($open, $name, $attrs) {
        $this->cchunk["classsynopsisinfo"] = $this->dchunk["classsynopsisinfo"];
        if ($open) {
            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"]) && $attrs[PhDReader::XMLNS_DOCBOOK]["role"] == "comment") {
                return '<div class="'.$name.' classsynopsisinfo_comment">/* ';
            }
            return '<div class="'.$name.'">';
        }

        if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"]) && $attrs[PhDReader::XMLNS_DOCBOOK]["role"] == "comment") {
            return ' */</div>';
        }
        $this->cchunk["classsynopsis"]["close"] = true;
        return ' {</div>';
    }

    public function format_classsynopsis($open, $name, $attrs) {
        if ($open) {
            return '<div class="'.$name.'">';
        }

        if ($this->cchunk["classsynopsis"]["close"] === true) {
            $this->cchunk["classsynopsis"]["close"] = false;
            return "}</div>";
        }
        return "</div>";
    }

    public function format_classsynopsis_ooclass_classname_text($value, $tag) {
        $this->cchunk["classsynopsis"]["classname"] = $value;
        return $this->TEXT($value);
    }


    public function format_fieldsynopsis($open, $name, $attrs) {
        $this->cchunk["fieldsynopsis"] = $this->dchunk["fieldsynopsis"];
        if ($open) {
            return '<div class="'.$name.'">';
        }
        return ";</div>\n";
    }
    public function format_fieldsynopsis_modifier_text($value, $tag) {
        $this->cchunk["fieldsynopsis"]["modifier"] = trim($value);
        return $this->TEXT($value);
    }
    public function format_methodsynopsis($open, $name, $attrs) {
        if ($open) {
            $this->params = array("count" => 0, "opt" => 0, "content" => "");
            return '<div class="'.$name.' dc-description">';
        }
        $content = "";
        if ($this->params["opt"]) {
            $content = str_repeat("]", $this->params["opt"]);
        }
        $content .= " )";

        $content .= "</div>\n";

        return $content;
    }
    public function format_methodparam_parameter($open, $name, $attrs, $props) {
        if ($props["empty"])
            return;
    	if ($open) {
            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                return ' <tt class="parameter reference">&$';
            }
            return ' <tt class="parameter">$';
        }
        return "</tt>";
    }
    public function format_initializer($open, $name, $attrs) {
        if ($open) {
            return '<span class="'.$name.'">=';
        }
        return '</span>';
    }
    public function format_parameter($open, $name, $attrs, $props) {
        if ($props["empty"])
            return;
    	if ($open) {
            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                return '<i><tt class="parameter reference">&';
            }
            return '<i><tt class="parameter">';
        }
        return "</tt></i>\n";
    }

    public function format_void($open, $name, $attrs) {
        return ' ( <span class="methodparam">void</span>';
    }
    public function format_methodparam($open, $name, $attrs) {
        if ($open) {
            $content = '';
                if ($this->params["count"] == 0) {
                    $content .= " (";
                }
                if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["choice"]) && $attrs[PhDReader::XMLNS_DOCBOOK]["choice"] == "opt") {
                    $this->params["opt"]++;
                    $content .= "[";
                } else if($this->params["opt"]) {
                    $content .= str_repeat("]", $this->params["opt"]);
                    $this->params["opt"] = 0;
                }
                if ($this->params["count"]) {
                    $content .= ",";
                }
                $content .= ' <span class="methodparam">';
                ++$this->params["count"];
                return $content;
        }
        return "</span>";
    }
    public function format_methodname($open, $name, $attr) {
        if ($open) {
            return ' <span class="methodname"><b>';
        }
        return '</b></span>';
    }

    public function format_varname($open, $name, $attrs) {
        if ($open) {
            return '<var class="'.$name.'">$';
        }
        return "</var>\n";
    }
    public function format_fieldsynopsis_varname($open, $name, $attrs) {
        if ($open) {
            if ($this->cchunk["fieldsynopsis"]["modifier"] === "const") {
                return '<var class="fieldsynopsis_varname">';
            }
            return '<var class="'.$name.'">$';
        }
        return '</var>';
    }

    public function format_footnoteref($open, $name, $attrs, $props) {
        if ($open) {
            $linkend = $attrs[PhDReader::XMLNS_DOCBOOK]["linkend"];
            $found = false;
            foreach($this->cchunk["footnote"] as $k => $note) {
                if ($note["id"] === $linkend) {
                    return '<a href="#fnid' .$note["id"]. '"><sup>[' .($k + 1). ']</sup></a>';
                }
            }
            trigger_error("footnoteref ID '$linkend' not found", E_USER_WARNING);
            return "";
        }
    }
    public function format_footnote($open, $name, $attrs, $props) {
        if ($open) {
            $count = count($this->cchunk["footnote"]);
            $noteid = isset($attrs[PhDReader::XMLNS_XML]["id"]) ? $attrs[PhDReader::XMLNS_XML]["id"] : $count + 1;
            $note = array("id" => $noteid, "str" => "");
            $this->cchunk["footnote"][$count] = $note;
            if ($this->cchunk["table"]) {
                $this->cchunk["tablefootnotes"][$count] = $noteid;
            }
            return '<a href="#fnid' .$noteid. '" name="fn'.$noteid.'"><sup>[' .($count + 1). ']</sup></a>';
        }
        return "";
    }

    /* {{{ FIXME: These are crazy workarounds :( */
    public function format_footnote_constant($open, $name, $attrs, $props) {
        $k = count($this->cchunk["footnote"]) - 1;
        $this->cchunk["footnote"][$k]["str"] .= self::format_constant($open, $name, $attrs, $props);
        return "";
    }
    public function format_footnote_constant_text($value, $tag) {
        $k = count($this->cchunk["footnote"]) - 1;
        $this->cchunk["footnote"][$k]["str"] .= $value;
        return "";
    }
    public function format_footnote_para($open, $name, $attrs, $props) {
        $k = count($this->cchunk["footnote"]) - 1;
        if ($open) {
            $this->cchunk["footnote"][$k]["str"] .= '<span class="para footnote">';
            return "";
        }

        $this->cchunk["footnote"][$k]["str"] .= "</span>";
        return "";
    }
    public function format_footnote_para_text($value, $tag) {
        $k = count($this->cchunk["footnote"]) - 1;
        $this->cchunk["footnote"][$k]["str"] .= $value;
        return "";
    }

    /* }}} */

    public function format_co($open, $name, $attrs, $props) {
        if (($open || $props["empty"]) && isset($attrs[PhDReader::XMLNS_XML]["id"])) {
            $co = ++$this->cchunk["co"];
            return '<a name="'.$attrs[PhDReader::XMLNS_XML]["id"].'" id="'.$attrs[PhDReader::XMLNS_XML]["id"].'">' .str_repeat("*", $co) .'</a>';
        }
        /* Suppress closing tag if any */
        return "";
    }
    public function format_calloutlist($open, $name, $attrs) {
        if ($open) {
            $this->cchunk["callouts"] = 0;
            return '<table>';
        }
        return '</table>';
    }
    public function format_callout($open, $name, $attrs) {
        if ($open) {
            return '<tr><td><a href="#'.$attrs[PhDReader::XMLNS_DOCBOOK]["arearefs"].'">' .str_repeat("*", ++$this->cchunk["callouts"]). '</a></td><td>';
        }
        return "</td></tr>\n";
    }

    public function format_quote($open, $name, $attrs) {
        if ($open) {
            return '"<span class="'.$name.'">';
        }
        return '</span>"';
    }
    public function format_manvolnum($open, $name, $attrs) {
        if ($open) {
            return '<span class="'.$name.'">(';
        }
        return ")</span>";
    }
    public function format_segmentedlist($open, $name, $attrs) {
        $this->cchunk["segmentedlist"] = $this->dchunk["segmentedlist"];
        if ($open) {
            return '<div class="'.$name.'">';
        }
        return '</div>';
    }
    public function format_segtitle_text($value, $tag) {
        $this->cchunk["segmentedlist"]["segtitle"][count($this->cchunk["segmentedlist"]["segtitle"])] = $value;
        /* Suppress the text */
        return "";
    }
    public function format_seglistitem($open, $name, $attrs) {
        if ($open) {
            $this->cchunk["segmentedlist"]["seglistitem"] = 0;
            return '<div class="'.$name.'">';
        }
        return '</div>';
    }
    public function format_seg($open, $name, $attrs) {
        if ($open) {
            return '<div class="seg"><strong><span class="segtitle">' .$this->cchunk["segmentedlist"]["segtitle"][$this->cchunk["segmentedlist"]["seglistitem"]++]. ':</span></strong>';
        }
        return '</div>';
    }
    public function format_procedure($open, $name, $attrs) {
        $this->cchunk["procedure"] = false;
        if ($open) {
            return '<div class="'.$name.'">';
        }
        return '</ol></div>';
    }
    public function format_step($open, $name, $attrs) {
        if ($open) {
            $ret = "";
            if ($this->cchunk["procedure"] === false) {
                $this->cchunk["procedure"] = true;
                $ret = '<ol type="1">';
            }
            return $ret . "<li>";
        }
        return '</li>';
    }
    public function format_variablelist($open, $name, $attrs) {
        if ($open) {
            return "<dl>\n";
        }
        return "</dl>\n";
    }
    public function format_varlistentry($open, $name, $attrs) {
        if ($open) {
            return isset($attrs[PhDReader::XMLNS_XML]["id"]) ? '<dt id="'.$attrs[PhDReader::XMLNS_XML]["id"]. '">' : "<dt>\n";
        }
        return "</dt>\n";
    }
    public function format_varlistentry_listitem($open, $name, $attrs) {
        if ($open) {
            return "<dd>\n";
        }
        return "</dd>\n";
    }
    public function format_term($open, $name, $attrs, $props) {
        if ($open) {
            if ($props["sibling"] == $name) {
                return '<br /><span class="' .$name. '">';
            }
            return '<span class="' .$name. '">';
        }
        return "</span>\n";
    }
    public function format_userinput($open, $name, $attrs) {
        if ($open) {
            return '<strong class="' .$name. '"><code>';
        }
        return "</code></strong>\n";
    }
    public function format_systemitem($open, $name, $attrs) {
        if ($open) {
            $val = isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"]) ? $attrs[PhDReader::XMLNS_DOCBOOK]["role"] : null;
            switch($val) {
            case "directive":
            /* FIXME: Different roles should probably be handled differently */
            default:
                return '<code class="systemitem ' .$name. '">';
            }
        }
        return "</code>\n";
    }
    public function format_example_content($open, $name, $attrs) {
        if ($open) {
            return '<div class="example-contents"><p>';
        }
        return "</p></div>";
    }
    public function format_programlisting($open, $name, $attrs) {
        if ($open) {
            if (isset($attrs[PhDReader::XMLNS_DOCBOOK]["role"])) {
                $this->role = $attrs[PhDReader::XMLNS_DOCBOOK]["role"];
            } else {
                $this->role = false;
            }

            return '<div class="example-contents">';
        }
        $this->role = false;
        return "</div>\n";
    }
    public function format_programlisting_text($value, $tag) {
        return $this->CDATA($value);
    }
    public function format_screen($open, $name, $attrs) {
        if ($open) {
            return '<div class="example-contents"><pre>';
        }
        return '</pre></div>';
    }
    public function format_constant($open, $name, $attrs) {
        if ($open) {
            return "<b><tt>";
        }
        return "</tt></b>";
    }
    public function format_admonition($open, $name, $attrs, $props) {
        if ($open) {
            return '<div class="'. $name. '">' .$this->admonition_title($name, $props["lang"]);
        }
        return "</div>";
    }
    public function format_authorgroup_author($open, $name, $attrs, $props) {
        if ($open) {
            if ($props["sibling"] !== $name) {
                return '<div class="'.$name.' vcard">' .$this->admonition_title("by", $props["lang"]). ':<br />';
            }
            return '<div class="'.$name.' vcard">';
        }
        return "</div>\n";
    }
    public function format_editor($open, $name, $attrs, $props) {
        if ($open) {
            return '<div class="editor vcard">' .$this->admonition_title("editedby", $props["lang"]). ': ';
        }
        return "</div>\n";
    }
    public function format_note($open, $name, $attrs, $props) {
        if ($open) {
            return '<blockquote><p>'.$this->admonition_title("note", $props["lang"]). ': ';
        }
        return "</p></blockquote>";
    }
    public function format_note_title($open, $name, $attrs) {
        if ($open) {
            return '<b>';
        }
        return '</b><br />';
    }
    public function format_note_content($open, $name, $attrs) {
        if ($open) {
            /* Ignore the open tag */
            return "";
        }
        return "<br />";
    }
    public function format_example_title($open, $name, $attrs, $props) {
        if ($props["empty"]) {
            return "";
        }
        if ($open) {
            return "<p><b>" . ($this->autogen('example', $props['lang']) . ++$this->cchunk["examples"]) . " ";
        }
        return "</b></p>";
    }
    public function format_table_title($open, $name, $attrs, $props) {
        if ($props["empty"]) {
            return "";
        }
        if ($open) {
            return "<caption><b>";
        }
        return "</b></caption>";
    }

    public function format_mediaobject($open, $name, $attrs) {
        $this->cchunk["mediaobject"] = $this->dchunk["mediaobject"];
        if ($open) {
            return '<div class="'.$name.'">';
        }
        return '</div>';
    }
    public function format_alt_text($value, $tag) {
        $this->cchunk["mediaobject"]["alt"] = $value;
    }
    public function format_imagedata($open, $name, $attrs) {
        if ($this->cchunk["mediaobject"]["alt"] !== false) {
            return '<img src="' .$attrs[PhDReader::XMLNS_DOCBOOK]["fileref"]. '" alt="' .$this->cchunk["mediaobject"]["alt"]. '" />';
        }
        return '<img src="' .$attrs[PhDReader::XMLNS_DOCBOOK]["fileref"]. '" />';
    }

    public function format_table($open, $name, $attrs, $props) {
        if ($open) {
            $this->cchunk["table"] = true;
            return '<table border="5">';
        }
        $this->cchunk["table"] = false;
        $str = "";
        if ($this->cchunk["tablefootnotes"]) {
            $opts = array(PhDReader::XMLNS_DOCBOOK => array());

            $str =  $this->format_tbody(true, "footnote", $opts, $props);
            $str .= $this->format_row(true, "footnote", $opts, $props);
            $str .= $this->format_entry(true, "footnote", $opts, $props+array("colspan" => $this->getColCount()));

            foreach ($this->cchunk["tablefootnotes"] as $k => $noteid) {
                $str .= '<div class="footnote">';
                $str .= '<a name="fnid' .$noteid. '" href="#fn' .$noteid .'"><sup>[' .($k + 1). ']</sup></a>' .$this->cchunk["footnote"][$k]["str"] . "\n";
                unset($this->cchunk["footnote"][$k]);
                $str .= "</div>\n";

            }
            $str .= $this->format_entry(false, "footnote", $opts, $props);
            $str .= $this->format_row(false, "footnote", $opts, $props);
            $str .= $this->format_tbody(false, "footnote", $opts, $props);

            $this->cchunk["tablefootnotes"] = $this->dchunk["tablefootnotes"];
        }
        return "$str</table>\n";
    }
    public function format_tgroup($open, $name, $attrs) {
        if ($open) {
            PhDFormat::tgroup($attrs[PhDReader::XMLNS_DOCBOOK]);
            return "<colgroup>\n";
        }
        return "</colgroup>\n";
    }
    private function parse_table_entry_attributes($attrs) {
        $retval = 'align="' .$attrs["align"]. '"';
        if ($attrs["align"] == "char" && isset($attrs["char"])) {
            $retval .= ' char="' .(htmlspecialchars($attrs["char"], ENT_QUOTES)). '"';
            if (isset($attrs["charoff"])) {
                $retval .= ' charoff="' .(htmlspecialchars($attrs["charoff"], ENT_QUOTES)). '"';
            }
        }
        if (isset($attrs["valign"])) {
            $retval .= ' valign="' .$attrs["valign"]. '"';
        }
        if (isset($attrs["colwidth"])) {
            $retval .= ' width="' .((int)$attrs["colwidth"]). '"';
        }
        return $retval;
    }
    public function format_colspec($open, $name, $attrs) {
        if ($open) {
            $str = self::parse_table_entry_attributes(PhDFormat::colspec($attrs[PhDReader::XMLNS_DOCBOOK]));

            return '<col '.$str. ' />';
        }
        /* noop */
    }
    public function format_th($open, $name, $attrs) {
        if ($open) {
            $valign = PhDFormat::valign($attrs[PhDReader::XMLNS_DOCBOOK]);
            return '<' .$name. ' valign="' .$valign. '">';
        }
        return "</$name>\n";
    }
    public function format_tbody($open, $name, $attrs) {
        if ($open) {
            $valign = PhDFormat::valign($attrs[PhDReader::XMLNS_DOCBOOK]);
            return '<tbody valign="' .$valign. '" class="' .$name. '">';
        }
        return "</tbody>";
    }
    public function format_row($open, $name, $attrs) {
        if ($open) {
            PhDFormat::initRow();
            $valign = PhDFormat::valign($attrs[PhDReader::XMLNS_DOCBOOK]);
            return '<tr valign="' .$valign. '">';
        }
        return "</tr>\n";
    }
    public function format_th_entry($open, $name, $attrs) {
        if ($open) {
            $colspan = PhDFormat::colspan($attrs[PhDReader::XMLNS_DOCBOOK]);
            return '<th colspan="' .((int)$colspan). '">';
        }
        return '</th>';
    }
    public function format_entry($open, $name, $attrs, $props) {
        if ($props["empty"]) {
            return '<td class="empty">&nbsp;</td>';
        }
        if ($open) {
            $dbattrs = PhDFormat::getColspec($attrs[PhDReader::XMLNS_DOCBOOK]);

            $retval = "";
            if (isset($dbattrs["colname"])) {
                for($i=PhDFormat::getEntryOffset($dbattrs); $i>0; --$i) {
                    $retval .= '<td class="empty">&nbsp;</td>';
                }
            }

            /*
             * "colspan" is *not* an standard prop, only used to overwrite the
             * colspan for <footnote>s in tables
             */
            if (isset($props["colspan"])) {
                $colspan = $props["colspan"];
            } else {
                $colspan = PhDFormat::colspan($dbattrs);
            }

            $rowspan = PhDFormat::rowspan($dbattrs);
            $moreattrs = self::parse_table_entry_attributes($dbattrs);
            return $retval. '<td colspan="' .((int)$colspan). '" rowspan="' .((int)$rowspan). '" ' .$moreattrs. '>';
        }
        return "</td>";
    }
    public function format_qandaset($open, $name, $attrs, $props) {
        if ($open) {
            $node = $this->getReader()->expand();
            $doc = new DOMDocument;
            $doc->appendChild($node);

            $xp = new DOMXPath($doc);
            $xp->registerNamespace("db", PhDReader::XMLNS_DOCBOOK);

            $questions = $xp->query("//db:qandaentry/db:question");

            $xml = '<questions xmlns="' .PhDReader::XMLNS_PHD. '">';
            foreach($questions as $node) {
                $id = $xp->evaluate("ancestor::db:qandaentry", $node)->item(0)->getAttributeNs(PhDReader::XMLNS_XML, "id");

                /* FIXME: No ID? How can we create an anchor for it then? */
                if (!$id) {
                    $id = uniqid("phd");
                }

                $node->setAttribute("xml:id", $id);
                $xml .= $doc->saveXML($node);
            }
            $xml .= "</questions>";

            $r = new PhDReader();
            $r->XML($xml);

            $render = new PhDRender;
            $render->attach($this);
            $render->render($r);
        }
    }
    public function format_question($open, $name, $attrs, $props) {
        if ($open) {
            return '<dt><strong>';
        }
        return '</strong></dt>';
    }
    public function format_phd_question($open, $name, $attrs, $props) {
        if ($open) {
            $href = $this->createLink($attrs[PhDReader::XMLNS_XML]["id"]);
            return '<li><a href="' .$href. '">';
        }
        return '</a></li>';
    }

    public function format_citation($open, $name, $attrs, $props) {
        if ($open) {
            return '[<span class="citation">';
        }
        return '</span>]';
    }

    public function format_email_text($value) {
        return '&lt;<a href="mailto:' . $value . '">' . $value . '</a>&gt;';
    }
}

/*
 * vim600: sw=4 ts=4 fdm=syntax syntax=php et
 * vim<600: sw=4 ts=4
 */

