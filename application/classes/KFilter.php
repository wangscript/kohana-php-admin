<?php defined('SYSPATH') OR die('No direct script access.');

class KFilter {
	private static $badword = array('毛泽东','周恩来','刘少奇','朱德','彭德怀','林彪','刘伯承','陈毅','贺龙','聂荣臻','徐向前','罗荣桓','叶剑英','李大钊','陈独秀','孙中山','孙文','孙逸仙','邓小平','陈云','江泽民','李鹏','朱镕基','李瑞环','尉健行','李岚清','胡锦涛','罗干','温家宝','吴邦国','曾庆红','贾庆林','黄菊','吴官正','李长春','吴仪','回良玉','曾培炎','周永康','曹刚川','唐家璇','华建敏','陈至立','陈良宇','张德江','张立昌','俞正声','王乐泉','刘云山','王刚','王兆国','刘淇','贺国强','郭伯雄','胡耀邦','王乐泉','王兆国','周永康','李登辉','连战','陈水扁','宋楚瑜','吕秀莲','郁慕明','蒋介石','蒋中正','蒋经国','马英九本拉登','奥马尔','柴玲','达赖喇嘛','江青','张春桥','姚文元','王洪文','东条英机','希特勒','墨索里尼','冈村秀树','冈村宁次','高丽朴','赵紫阳','王丹','沃尔开西','李洪志','李大师','赖昌星','马加爵山本五十六','阿扁','六四','六四运动','六四大屠杀','6 4事件','中国1989 6 4事件视频','6 4事件视频','1989 6 4事件','中国1989 6 4事件','1989事件视频','北京民运89','1989年北京学生','1989年学运动','六四20年','八九民运','1989年学潮事件','四二六社论','426社论密宗','中共屠城','共产党屠城','民国','民进党','民运','民主潮','摩门教','纳粹','南华早报','南蛮','明慧网','起义','亲民党','瘸腿帮','人民报','法轮功','法轮大法','打倒共产党','台独万岁','圣战','示威','台独','台独分子','台联','台湾民国','台湾岛国','台湾独立','太子党','天安门事件','屠杀','小泉','新党','新疆独立','新疆分裂','新疆国','疆独','西藏独立','西藏分裂','西藏国','藏独','藏青会','藏妇会','学潮','学运','一党专政','一中一台','两个中国','一贯道','游行','圆满','造反','真善忍','镇压','政变','政治','政治反对派','政治犯','中共','反党','反共','政府','民主党','中国之春','转法轮','自焚','共党','共匪','苏家屯','基地组织','塔利班','东亚病夫','支那','高治联','高自联','核工业基地','核武器','铀','原子弹','氢弹','导弹','核潜艇','大参考','小参考','国内动态清样','升天','圣战','白莲教','东正教','大法','法轮','法轮功','瘸腿帮','真理教','真善忍','转法轮','自焚','走向圆满','黄大仙','风水','跳大神','神汉','神婆','真理教','大卫教','藏独','高丽棒子','回回','疆独','蒙古鞑子','台独','台独分子','台联','台湾民国','西藏独立','新疆独立','南蛮','老毛子','习近平','开房','台湾岛国','藏青','藏复','本拉登','西藏国','强奸','轮奸','抢劫','先奸后杀','下注','押大','押小','抽头','坐庄','赌马','赌球','筹码','老虎机','轮盘赌','安非他命','大麻','可卡因','海洛因','冰毒','摇头丸','杜冷丁','鸦片','罂粟','迷幻药','白粉','嗑药','吸毒','屙','爱滋','淋病','梅毒','爱液','屄','逼','臭机八','臭鸡巴','吹喇叭','吹箫','催情药','屌','肛交','肛门','龟头','黄色','机八','机巴','鸡八','鸡巴','机掰','机巴','鸡叭','鸡鸡','鸡掰','鸡奸','妓女','奸','茎','精液','精子','尻','口交','滥交','乱交','轮奸','卖淫','屁眼','嫖娼','强奸','强奸犯','情色','肉棒','乳房','乳峰','乳交','乳头','乳晕','三陪','色情','射精','手淫','威而钢','威而柔','伟哥','性高潮','性交','性虐','性欲','穴','颜射','阳物','一夜情','阴部','阴唇','阴道','阴蒂','阴核','阴户','阴茎','阴门','淫','淫秽','淫乱','淫水','淫娃','淫液','淫汁','淫穴','淫洞','援交妹','做爱','梦遗','阳痿','早泄','奸淫','性欲','性交','K他命','白痴','笨蛋','屄','逼','变态','婊子','操她妈','操妳妈','操你','操你妈','操他妈','草你','肏','册那','侧那','测拿','插','蠢猪','荡妇','发骚','废物','干她妈','干妳','干妳娘','干你','干你妈','干你妈B','干你妈b','干你妈逼','干你娘','干他妈','狗娘养的','滚','鸡奸','贱货','贱人','烂人','老母','老土','妈比','妈的','马的','妳老母的','妳娘的','你妈逼','破鞋','仆街','去她妈','去妳的','去妳妈','去你的','去你妈','去死','去他妈','日你','赛她娘','赛妳娘','赛你娘','赛他娘','骚货','傻B','傻比','傻子','上妳','上你','神经病','屎','屎妳娘','屎你娘','他妈的','王八蛋','我日','乡巴佬','猪猡','屙','尿','掯','屌','骑你','湿了','操你','操他','操她','骑你','骑他','骑她','欠骑','欠人骑','来爽我','来插我','干你','干他','干她','干死','干爆','干机','FUCK','机叭','臭鸡','臭机','烂鸟','览叫','阳具','肉棒','肉壶','奶子','摸咪咪','干鸡','干入','小穴','强奸','插你','插你','爽你','干干','干X','他干','干它','干牠','干您','干汝','干林','操林','干尼','操尼','我咧干','干勒','干我','干到','干啦','干爽','欠干','狗干','我干','来干','轮干','轮流干','干一干','援交','骑你','轮奸','鸡奸','奸暴','再奸','我奸','奸你','奸你','奸他','奸她','奸一奸','淫水','淫湿','鸡歪','仆街','臭西','尻','吊','遗精','烂逼','大血比','叼你妈','靠你妈','草你','干你','日你','插你','奸你','戳你','逼你老母','挨球','我日你','草拟妈','卖逼','狗操卖逼','奸淫','日死','奶子','阴茎','奶娘','他娘','她娘','骚B','你妈了妹','逼毛','插你妈','叼你','渣波波','嫩b','毛澤東','周恩來','劉少奇','彭德懷','劉伯承','陳毅','賀龍','聶榮臻','羅榮桓','葉劍英','陳獨秀','孫中山','孫文','孫逸仙','鄧小平','陳雲','江澤民','李瑞環','李岚清','胡錦濤','羅幹','溫家寶','吳邦國','曾慶紅','賈慶林','黃菊','吳官正','李長春','吳儀','曹剛川','華建敏','陳至立','陳良宇','張德江','張立昌','俞正聲','王樂泉','劉雲山','王剛','王兆國','劉淇','賀國強','王樂泉','王兆國','連戰','陳水扁','呂秀蓮','蔣介石','蔣中正','蔣經國','馬英九本拉登','奧馬爾','達賴喇嘛','張春橋','東條英機','墨索裏尼','岡村秀樹','岡村甯次','高麗樸','趙紫陽','沃爾開西','李大師','賴昌星','馬加爵山本五十六','六四運動','六四大屠殺','64事件','中國1989 6 4事件視頻','6 4事件視頻','中國1989 6 4事件','1989事件視頻','北京民運89','1989年北京學生','1989年學運動','八九民運','1989年學潮事件','四二六社論','426社論密宗','中共屠城','共産黨屠城','民國','民進黨','民運','摩門教','納粹','南華早報','南蠻','明慧網','起義','親民黨','瘸腿幫','人民報','法輪功','法輪大法','打倒共産黨','台獨萬歲','聖戰','台獨','台獨分子','台聯','台灣民國','台灣島國','台灣獨立','太子黨','天安門事件','屠殺','小泉','新黨','新疆獨立','新疆國','疆獨','西藏獨立','西藏國','藏獨','藏青會','藏婦會','學潮','學運','一黨專政','兩個中國','一貫道','圓滿','鎮壓','政變','政治反對派','反黨','民主黨','中國之春','轉法輪','共黨','蘇家屯','基地組織','東亞病夫','高治聯','高自聯','核工業基地','鈾','原子彈','氫彈','導彈','核潛艇','大參考','小參考','國內動態清樣','聖戰','白蓮教','東正教','法輪','法輪功','瘸腿幫','轉法輪','走向圓滿','黃大仙','風水','神漢','大衛教','藏獨','高麗棒子','疆獨','台獨','台獨分子','台聯','台灣民國','西藏獨立','新疆獨立','南蠻','習近平','開房','台灣島國','藏複','西藏國','強奸','輪奸','搶劫','先奸後殺','抽頭','坐莊','賭馬','賭球','籌碼','老虎機','輪盤賭','搖頭丸','鴉片','迷幻藥','嗑藥','愛滋','愛液','臭機八','臭雞巴','催情藥','肛門','龜頭','黃色','機八','機巴','雞八','雞巴','機掰','機巴','雞叭','雞雞','雞掰','雞奸','莖','濫交','亂交','輪奸','賣淫','強奸','強奸犯','乳頭','乳暈','威而鋼','偉哥','陽物','陰部','陰唇','陰道','陰蒂','陰核','陰戶','陰莖','陰門','淫穢','淫亂','做愛','夢遺','陽痿','白癡','變態','操她媽','操妳媽','操你媽','操他媽','冊那','側那','測拿','蠢豬','蕩婦','發騷','廢物','幹她媽','幹妳','幹妳娘','幹你','幹你媽','幹你媽B','幹你媽b','幹你媽逼','幹你娘','幹他媽','狗娘養的','滾','雞奸','賤貨','賤人','爛人','媽比','媽的','馬的','妳老母的','妳娘的','你媽逼','去她媽','去妳媽','去你媽','去他媽','賽她娘','賽妳娘','賽你娘','賽他娘','騷貨','神經病','他媽的','鄉巴佬','豬猡','騎你','濕了','騎你','騎他','騎她','欠騎','欠人騎','來爽我','來插我','幹你','幹他','幹她','幹死','幹爆','幹機','機叭','臭雞','臭機','爛鳥','覽叫','陽具','肉壺','幹雞','幹入','幹幹','幹X','他幹','幹它','幹牠','幹您','幹汝','幹林','幹尼','我咧幹','幹勒','幹我','幹到','幹啦','幹爽','欠幹','狗幹','我幹','來幹','輪幹','輪流幹','幹一幹','騎你','輪奸','雞奸','淫濕','雞歪','遺精','爛逼','叼你媽','靠你媽','幹你','戳你','草擬媽','賣逼','狗操賣逼','陰莖','騷B','你媽了妹','插你媽','upup','GM','gm',"ＧＭ");
	private static $replaces = false;
	//过滤数据
	public static function Filter($text) {
		if (empty($text)) return $text;
		if (!self::$replaces) self::$replaces = array_combine(self::$badword, array_fill(0, count(self::$badword), '*'));
		return self::strtr_array($text, self::$replaces);
	}
	//替换数据
	public static function Replace($text, $replace = '*') {
		$replaces2 = array_combine(self::$badword, array_fill(0, count(self::$badword), $replace));
		return self::strtr_array($text, $replaces2);
	}
	private static function strtr_array(&$str, &$replace_arr) {
		$maxlen = 0; $minlen = 1024*128;
		if (empty($replace_arr)) return $str;
		foreach($replace_arr as $k => $v) {
			$len = strlen($k);
			if ($len < 1) continue;
			if ($len > $maxlen) $maxlen = $len;
			if ($len < $minlen) $minlen = $len;
		}
		$len = strlen($str);
		$pos = 0;$result = '';
		while ($pos < $len) {
			if ($pos + $maxlen > $len) $maxlen = $len - $pos;
			$found = false;$key = '';
			for($i = 0;$i<$maxlen;++$i) $key .= $str[$i+$pos]; //原文：memcpy(key,str+$pos,$maxlen)
			for($i = $maxlen;$i >= $minlen;--$i) {
				$key1 = substr($key, 0, $i); //原文：key[$i] = '\0'
				if (isset($replace_arr[$key1])) {
					$result .= $replace_arr[$key1];
					$pos += $i;
					$found = true;
					break;
				}
			}
			if(!$found) $result .= $str[$pos++];
		}
		return $result;
	}
}