/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/SyntaxHighlighter
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/SyntaxHighlighter/donate.html
 *
 * @version
 * 3.0.83 (July 02 2010)
 * 
 * @copyright
 * Copyright (C) 2004-2010 Alex Gorbatchev.
 *
 * @license
 * Dual licensed under the MIT and GPL licenses.
 */
;(function()
{
	// CommonJS
	typeof(require) != 'undefined' ? SyntaxHighlighter = require('shCore').SyntaxHighlighter : null;

	function Brush()
	{
		var keywords =	'begin end false true if else elseif class function return while do namespace ' +
						'select case catch try for in this global self owner var def null and not or ' +
						'break continue import with ctor try catch eval import type assert assertf error ' +
						'rget loadcode , dumpcode collectgarbage call invoke tostring topointer tonumber ' +
						'sleep execute setlocale setprivilege ' 
						;

		var r = SyntaxHighlighter.regexLib;
		
		this.regexList = [
			{ regex: XRegExp('\\/(\\*+)((?!\\1\\/).)*\\1\\/', 'gs'), 		        css: 'comments' },			// multiline comments 
			{ regex: XRegExp('"([^\\\\"])*"', 'gs'),			    css: 'string' },			// double quoted strings
			{ regex: r.multiLineSingleQuotedString,					css: 'string' },			// single quoted strings 
			{ regex: r.singleLineCComments,							css: 'comments' },			// one line comments 
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),	css: 'keyword' }			// keywords
			]; 
	 
	};

	Brush.prototype	= new SyntaxHighlighter.Highlighter();
	Brush.aliases	= ['aau', 'aauto'];

	SyntaxHighlighter.brushes.AAuto = Brush;

	// CommonJS
	typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
