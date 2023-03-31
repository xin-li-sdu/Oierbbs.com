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
		var datatypes =	'bool byte complex64 complex128 error float32 float64 ' +
						'int int8 int16 int32 int64 rune string ' +
						'uint uint8 uint16 uint32 uint64 uintptr';

		var constants = 'true false iota';

		var zerovalue = 'nil';

		var functions = 'append cap close complex copy delete imag len ' +
						'make new panic print println real recover';

		var keywords =	'break        default      func         interface    select ' +
						'case         defer        go           map          struct ' +
						'chan         else         goto         package      switch ' +
						'const        fallthrough  if     		range        type ' +
						'continue     for          import       return       var';

		this.regexList = [
			{ regex: /^\/\/ *#.*$/gm,									css: 'preprocessor' },
			{ regex: SyntaxHighlighter.regexLib.singleLineCComments,	css: 'comments' },			// one line comments
			{ regex: SyntaxHighlighter.regexLib.multiLineCComments,		css: 'comments' },			// multiline comments
			{ regex: SyntaxHighlighter.regexLib.doubleQuotedString,		css: 'string' },			// strings
			{ regex: SyntaxHighlighter.regexLib.singleQuotedString,		css: 'string' },			// strings
			{ regex: XRegExp("`([^\\\\`]|\\\\.)*`", 'gs'),				css: 'string' },			// strings
			{ regex: new RegExp(this.getKeywords(datatypes), 'gm'),		css: 'color1' },
			{ regex: new RegExp(this.getKeywords(functions), 'gm'), 	css: 'functions' },
			{ regex: new RegExp(this.getKeywords(constants), 'gm'),		css: 'constants' },
			{ regex: new RegExp(this.getKeywords(zerovalue), 'gm'),		css: 'constants' },
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),		css: 'keyword' }
			];
	};

	Brush.prototype = new SyntaxHighlighter.Highlighter();
	Brush.aliases = ['go', 'golang'];

	SyntaxHighlighter.brushes.Go = Brush;

	// CommonJS
	typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
