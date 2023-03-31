/*
 *
 * shBrushLua.js (v. 0.1)
 *
 * https://github.com/eljeko/shBrushLua
 *
 * by eljeko
 *
 * Twitter: http://twitter.com/eljeko
 * Linkedin: http://www.linkedin.com/in/linguerri
 *
 * Lua brush for SyntaxHighlighter: http://alexgorbatchev.com/SyntaxHighlighter/
 * 
 * original version by bear.mini (available at: http://www.undermyhat.org/blog/2009/09/list-of-brushes-syntaxhighligher)
 *
 * License under the terms of either the MIT License or the GNU General Public License (GPL) Version 3.
 * 
 */
 
;(function()
{
    // CommonJS
    typeof(require) != 'undefined' ? SyntaxHighlighter = require('shCore').SyntaxHighlighter : null;

    function Brush()
    {
        var keywords = 'do break end elseif else this function if local nil or not return repeat and until then while';
        var functions = 'math\\.\\w+ string\\.\\w+ os\\.\\w+ debug\\.\\w+ io\\.\\w+ error fopen dofile coroutine\\.\\w+ arg ipairs getmetatable loadfile longjmp loadstring rawget print seek rawset assert setmetatable tostring tonumber loadlib';

        this.regexList = [
            { regex: new RegExp(this.getKeywords(functions), 'gm'),                 css: 'functions'     },
            { regex: new RegExp('\\b([\\d]+(\\.[\\d]+)?|0x[a-f0-9]+)\\b', 'gi'),    css: 'luanumber'}, // numbers
            { regex: new RegExp(this.getKeywords(keywords),  'gm'),                 css: 'keyword'  },
            { regex: new RegExp('--\\[\\[[\\s\\S]*\\]\\]--', 'gm'),                 css: 'comments' },
            { regex: new RegExp('--[^\\[]{2}.*$', 'gm'),                            css: 'comments' }, // one line comments
            { regex: SyntaxHighlighter.regexLib.doubleQuotedString,                             css: 'string'   }, // strings
            { regex: SyntaxHighlighter.regexLib.singleQuotedString,                             css: 'string'   }, // strings
			{ regex: SyntaxHighlighter.regexLib.singleLineCComments,	css: 'comments' },			// one line comments
			{ regex: SyntaxHighlighter.regexLib.multiLineCComments,		css: 'comments' },			// multiline comments
            { regex: new RegExp('__sub', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__mul', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__div', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__mod', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__pow', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__unm', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__concat', 'gm'),                                  css: 'specialfields' }, //special lua field
            { regex: new RegExp('__len', 'gm'),                                     css: 'specialfields' }, //special lua field
            { regex: new RegExp('__eq', 'gm'),                                      css: 'specialfields' }, //special lua field
            { regex: new RegExp('__lt', 'gm'),                                      css: 'specialfields' }, //special lua field
            { regex: new RegExp('__le', 'gm'),                                      css: 'specialfields' }, //special lua field
            { regex: new RegExp('__call', 'gm'),                                    css: 'specialfields' }, //special lua field
            { regex: new RegExp('__gc', 'gm'),                                      css: 'specialfields' }, //special lua field
            { regex: new RegExp('__index', 'gm'),                                   css: 'specialfields' }, //special lua field
            { regex: new RegExp('__newindex', 'gm'),                                css: 'specialfields' }, //special lua field
        ];

		this.CssClass = 'dp-lua';
		this.Style =    '.dp-lua .luanumber { color: #440077; }' +
						'.dp-lua .specialfields { color: #880000; }';
    };

    Brush.prototype = new SyntaxHighlighter.Highlighter();
    Brush.aliases   = ['lua'];

    SyntaxHighlighter.brushes.Lua = Brush;

    // CommonJS
    typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
