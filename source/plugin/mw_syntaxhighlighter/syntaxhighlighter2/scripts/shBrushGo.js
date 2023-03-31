/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/wiki/SyntaxHighlighter:Donate
 *
 * @version
 * 2.1.382 (June 24 2010)
 * 
 * @copyright
 * Copyright (C) 2004-2009 Alex Gorbatchev.
 *
 * @license
 * This file is part of SyntaxHighlighter.
 * 
 * SyntaxHighlighter is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * SyntaxHighlighter is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with SyntaxHighlighter.  If not, see <http://www.gnu.org/copyleft/lesser.html>.
 */
SyntaxHighlighter.brushes.Go = function()
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

SyntaxHighlighter.brushes.Go.prototype	= new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.Go.aliases	= ['go', 'golang'];