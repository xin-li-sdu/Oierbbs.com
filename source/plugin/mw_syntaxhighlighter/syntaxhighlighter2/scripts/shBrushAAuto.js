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
SyntaxHighlighter.brushes.AAuto = function()
{
	var keywords =	'begin end false true if else elseif class function return while do namespace ' +
						'select case catch try for in this global self owner var def null and not or ' +
						'break continue import with ctor try catch eval import type assert assertf error ' +
						'rget loadcode , dumpcode collectgarbage call invoke tostring topointer tonumber ' +
						'sleep execute setlocale setprivilege ' 
						;

	this.regexList = [
			{ regex: /\/(\*+)((?!\1\/)[\s\S])*\1\//g, 		        css: 'comments' },			// multiline comments 
			{ regex: /"([^\\"])*"/g,			    css: 'string' },			// double quoted strings
			{ regex: SyntaxHighlighter.regexLib.multiLineSingleQuotedString,					css: 'string' },			// single quoted strings 
			{ regex: SyntaxHighlighter.regexLib.singleLineCComments,							css: 'comments' },			// one line comments 
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),	css: 'keyword' }			// keywords
			]; 
			 
};

SyntaxHighlighter.brushes.AAuto.prototype	= new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.AAuto.aliases	= ['aau', 'aauto' ];
 