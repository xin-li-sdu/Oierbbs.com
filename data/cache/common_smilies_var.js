var smthumb = '20';var smilies_type = new Array();smilies_type['_1'] = ['默认1', 'default'];smilies_type['_5'] = ['默认2', 'comcom'];smilies_type['_2'] = ['酷猴', 'coolmonkey'];smilies_type['_3'] = ['呆呆男', 'grapeman'];smilies_type['_4'] = ['老虎', 'tiger'];smilies_type['_6'] = ['黑豆', 'blackbean'];var smilies_array = new Array();var smilies_fast = new Array();smilies_array[1] = new Array();smilies_array[1][1] = [['1', ':)','smile.gif','20','20','20'],['2', ':(','sad.gif','20','20','20'],['3', ':D','biggrin.gif','20','20','20'],['4', ':\'(','cry.gif','20','20','20'],['5', ':@','huffy.gif','20','20','20'],['6', ':o','shocked.gif','20','20','20'],['7', ':P','tongue.gif','20','20','20'],['8', ':$','shy.gif','20','20','20'],['9', ';P','titter.gif','20','20','20'],['10', ':L','sweat.gif','20','20','20'],['11', ':Q','mad.gif','20','20','20'],['12', ':lol','lol.gif','20','20','20'],['13', ':loveliness:','loveliness.gif','20','20','20'],['14', ':funk:','funk.gif','20','20','20'],['15', ':curse:','curse.gif','20','20','20'],['16', ':dizzy:','dizzy.gif','20','20','20'],['17', ':shutup:','shutup.gif','20','20','20'],['18', ':sleepy:','sleepy.gif','20','20','20'],['19', ':hug:','hug.gif','20','20','20'],['20', ':victory:','victory.gif','20','20','20'],['21', ':time:','time.gif','20','20','20'],['22', ':kiss:','kiss.gif','20','20','20'],['23', ':handshake','handshake.gif','20','20','20'],['24', ':call:','call.gif','20','20','20']];smilies_array[5] = new Array();smilies_array[5][1] = [['126', '{:5_126:}','8.gif','20','20','20'],['127', '{:5_127:}','14.gif','20','20','20'],['128', '{:5_128:}','5.gif','20','20','20'],['129', '{:5_129:}','11.gif','20','20','20'],['130', '{:5_130:}','30.gif','20','20','20'],['131', '{:5_131:}','9.gif','20','20','20'],['132', '{:5_132:}','18.gif','20','20','20'],['133', '{:5_133:}','17.gif','20','20','20'],['134', '{:5_134:}','12.gif','20','20','20'],['135', '{:5_135:}','29.gif','20','20','20'],['136', '{:5_136:}','10.gif','20','20','20'],['137', '{:5_137:}','24.gif','20','20','20'],['138', '{:5_138:}','23.gif','20','20','20'],['139', '{:5_139:}','20.gif','20','20','20'],['140', '{:5_140:}','28.gif','20','20','20'],['141', '{:5_141:}','2.gif','20','20','20'],['142', '{:5_142:}','22.gif','20','20','20'],['143', '{:5_143:}','27.gif','20','20','20'],['144', '{:5_144:}','1.gif','20','20','20'],['145', '{:5_145:}','21.gif','20','20','20'],['146', '{:5_146:}','13.gif','20','20','20'],['147', '{:5_147:}','25.gif','20','20','20'],['148', '{:5_148:}','3.gif','20','20','20'],['149', '{:5_149:}','19.gif','20','20','20'],['150', '{:5_150:}','7.gif','20','20','20'],['151', '{:5_151:}','26.gif','20','20','20'],['152', '{:5_152:}','4.gif','20','20','20'],['153', '{:5_153:}','16.gif','20','20','20'],['154', '{:5_154:}','15.gif','20','20','20'],['155', '{:5_155:}','6.gif','20','20','20']];smilies_array[2] = new Array();smilies_array[2][1] = [['25', '{:2_25:}','01.gif','20','20','48'],['26', '{:2_26:}','02.gif','20','20','48'],['27', '{:2_27:}','03.gif','20','20','48'],['28', '{:2_28:}','04.gif','20','20','48'],['29', '{:2_29:}','05.gif','20','20','48'],['30', '{:2_30:}','06.gif','20','20','48'],['31', '{:2_31:}','07.gif','20','20','48'],['32', '{:2_32:}','08.gif','20','20','48'],['33', '{:2_33:}','09.gif','20','20','48'],['34', '{:2_34:}','10.gif','20','20','48'],['35', '{:2_35:}','11.gif','20','20','48'],['36', '{:2_36:}','12.gif','20','20','48'],['37', '{:2_37:}','13.gif','20','20','48'],['38', '{:2_38:}','14.gif','20','20','48'],['39', '{:2_39:}','15.gif','20','20','48'],['40', '{:2_40:}','16.gif','20','20','48']];smilies_array[3] = new Array();smilies_array[3][1] = [['41', '{:3_41:}','01.gif','20','20','48'],['42', '{:3_42:}','02.gif','20','20','48'],['43', '{:3_43:}','03.gif','20','20','48'],['44', '{:3_44:}','04.gif','20','20','48'],['45', '{:3_45:}','05.gif','20','20','48'],['46', '{:3_46:}','06.gif','20','20','48'],['47', '{:3_47:}','07.gif','20','20','48'],['48', '{:3_48:}','08.gif','20','20','48'],['49', '{:3_49:}','09.gif','20','20','48'],['50', '{:3_50:}','10.gif','20','20','48'],['51', '{:3_51:}','11.gif','20','20','48'],['52', '{:3_52:}','12.gif','20','20','48'],['53', '{:3_53:}','13.gif','20','20','48'],['54', '{:3_54:}','14.gif','20','20','48'],['55', '{:3_55:}','15.gif','20','20','48'],['56', '{:3_56:}','16.gif','20','20','48'],['57', '{:3_57:}','17.gif','20','20','48'],['58', '{:3_58:}','18.gif','20','20','48'],['59', '{:3_59:}','19.gif','20','20','48'],['60', '{:3_60:}','20.gif','20','20','48'],['61', '{:3_61:}','21.gif','20','20','48'],['62', '{:3_62:}','22.gif','20','20','48'],['63', '{:3_63:}','23.gif','20','20','48'],['64', '{:3_64:}','24.gif','20','20','48']];smilies_array[4] = new Array();smilies_array[4][1] = [['86', '{:4_86:}','07.gif','20','20','50'],['87', '{:4_87:}','14.gif','20','20','50'],['88', '{:4_88:}','01.gif','20','20','50'],['89', '{:4_89:}','11.gif','20','20','50'],['90', '{:4_90:}','30.gif','20','20','50'],['91', '{:4_91:}','18.gif','20','20','50'],['92', '{:4_92:}','17.gif','20','20','50'],['93', '{:4_93:}','32.gif','20','20','50'],['94', '{:4_94:}','12.gif','20','20','50'],['95', '{:4_95:}','33.gif','20','20','50'],['96', '{:4_96:}','29.gif','20','20','50'],['97', '{:4_97:}','10.gif','20','20','50'],['98', '{:4_98:}','24.gif','20','20','50'],['99', '{:4_99:}','23.gif','20','20','50'],['100', '{:4_100:}','20.gif','20','20','50'],['101', '{:4_101:}','28.gif','20','20','50'],['102', '{:4_102:}','35.gif','20','20','50'],['103', '{:4_103:}','06.gif','20','20','50'],['104', '{:4_104:}','08.gif','20','20','50'],['105', '{:4_105:}','40.gif','20','20','50'],['106', '{:4_106:}','22.gif','20','20','50'],['107', '{:4_107:}','27.gif','20','20','50'],['108', '{:4_108:}','09.gif','20','20','50'],['109', '{:4_109:}','34.gif','20','20','50'],['110', '{:4_110:}','21.gif','20','20','50'],['111', '{:4_111:}','05.gif','20','20','50'],['112', '{:4_112:}','13.gif','20','20','50'],['113', '{:4_113:}','02.gif','20','20','50'],['114', '{:4_114:}','36.gif','20','20','50'],['115', '{:4_115:}','25.gif','20','20','50'],['116', '{:4_116:}','39.gif','20','20','50'],['117', '{:4_117:}','04.gif','20','20','50'],['118', '{:4_118:}','19.gif','20','20','50'],['119', '{:4_119:}','26.gif','20','20','50'],['120', '{:4_120:}','38.gif','20','20','50'],['121', '{:4_121:}','03.gif','20','20','50'],['122', '{:4_122:}','37.gif','20','20','50'],['123', '{:4_123:}','16.gif','20','20','50'],['124', '{:4_124:}','15.gif','20','20','50'],['125', '{:4_125:}','31.gif','20','20','50']];smilies_array[6] = new Array();smilies_array[6][1] = [['156', '{:6_156:}','8.gif','20','20','43'],['157', '{:6_157:}','14.gif','20','20','44'],['158', '{:6_158:}','5.gif','20','20','44'],['159', '{:6_159:}','11.gif','20','20','43'],['160', '{:6_160:}','9.gif','20','20','42'],['161', '{:6_161:}','18.gif','20','20','43'],['162', '{:6_162:}','17.gif','20','20','44'],['163', '{:6_163:}','12.gif','20','20','44'],['164', '{:6_164:}','29.gif','20','20','44'],['165', '{:6_165:}','10.gif','20','20','44'],['166', '{:6_166:}','24.gif','20','20','43'],['167', '{:6_167:}','23.gif','20','20','42'],['168', '{:6_168:}','20.gif','20','20','43'],['169', '{:6_169:}','28.gif','20','20','42'],['170', '{:6_170:}','2.gif','20','20','43'],['171', '{:6_171:}','22.gif','20','20','44'],['172', '{:6_172:}','27.gif','20','20','44'],['173', '{:6_173:}','1.gif','20','20','44'],['174', '{:6_174:}','21.gif','20','20','43'],['175', '{:6_175:}','13.gif','20','20','43'],['176', '{:6_176:}','25.gif','20','19','44'],['177', '{:6_177:}','3.gif','20','20','43'],['178', '{:6_178:}','19.gif','20','20','43'],['179', '{:6_179:}','7.gif','20','20','44'],['180', '{:6_180:}','26.gif','20','20','44'],['181', '{:6_181:}','4.gif','20','20','44'],['182', '{:6_182:}','16.gif','20','20','44'],['183', '{:6_183:}','15.gif','20','20','44'],['184', '{:6_184:}','6.gif','20','20','43']];var smilies_fast=[['1','1','0'],['1','1','1'],['1','1','2'],['1','1','3'],['1','1','4'],['1','1','5'],['1','1','6'],['1','1','7'],['1','1','8'],['1','1','9'],['1','1','10'],['1','1','11'],['1','1','12'],['1','1','13'],['1','1','14'],['1','1','15']];