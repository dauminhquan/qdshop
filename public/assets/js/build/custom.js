
function getdata(i) {

    //api-thống kê
    return [
    {type: "val1", date: "2015/06/15", total: 20,invoice:5000},

    {type: "val1", date: "2015/06/16", total: "90",invoice:5000},

    {type: "val1", date: "2015/06/17", total: "1150",invoice:5000},
    {type: "val1", date: "2015/06/18", total: "1157",invoice:5000},
    {type: "val1", date: "2015/06/19", total: "1200",invoice:5000},
    {type: "val1", date: "2015/06/20", total: "1197",invoice:5000},
    {type: "val1", date: "2015/06/21", total: "1168",invoice:5000},
    {type: "val1", date: "2015/06/22", total: "1190",invoice:50000},
    {type: "val1", date: "2015/06/23", total: "1230",invoice:50000}
    ]
}

function showdate(start,end) {
    $('.daterange-ranges span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    //getdata
    $('#reloaddata').click()
}
$(document).ready(function () {
    $('select[name="ship_state_province"]').change(function () {
        var value = $(this).val();
        var data = {"1":{"name":"Thành phố Cần Thơ","districts":{"66":"Huyện Cờ Đỏ","67":"Huyện Phong Điền","68":"Huyện Thới Lai","69":"Huyện Vĩnh Thạnh","70":"Quận Bình Thủy","71":"Quận Cái Răng","72":"Quận Ninh Kiều","73":"Quận Ô Môn","74":"Quận Thốt Nốt"}},"2":{"name":"Thành phố Đà Nẵng","districts":{"76":"Huyện Hòa Vang","77":"Huyện Hoàng Sa","78":"Quận Cẩm Lệ","79":"Quận Hải Châu","80":"Quận Liên Chiểu","81":"Quận Ngũ Hành Sơn","82":"Quận Sơn Trà","83":"Quận Thanh Khê"}},"3":{"name":"Thành phố Hà Nội","districts":{"85":"Huyện Ba Vì","86":"Huyện Chương Mỹ","87":"Huyện Đan Phượng","88":"Huyện Đông Anh","89":"Huyện Gia Lâm","90":"Huyện Hoài Đức","91":"Huyện Mê Linh","92":"Huyện Mỹ Đức","93":"Huyện Phú Xuyên","94":"Huyện Phúc Thọ","95":"Huyện Quốc Oai","96":"Huyện Sóc Sơn","97":"Huyện Thạch Thất","98":"Huyện Thanh Oai","99":"Huyện Thanh Trì","100":"Huyện Thường Tín","101":"Huyện Từ Liêm","102":"Huyện ứng Hòa","103":"Quận Ba Đình","104":"Quận Cầu Giấy","105":"Quận Đống Đa","106":"Quận Hà Đông","107":"Quận Hai Bà Trưng","108":"Quận Hoàn Kiếm","109":"Quận Hoàng Mai","110":"Quận Long Biên","111":"Quận Tây Hồ","112":"Quận Thanh Xuân","113":"Thị xã Sơn Tây"}},"4":{"name":"Thành phố Hải Phòng","districts":{"115":"Huyện An Dương","116":"Huyện An Lão","117":"Huyện Bạch Long Vĩ","118":"Huyện Cát Hải","119":"Huyện Kiến Thụy","120":"Huyện Thủy Nguyên","121":"Huyện Tiên Lãng","122":"Huyện Vĩnh Bảo","123":"Quận Đồ Sơn","124":"Quận Dương Kinh","125":"Quận Hải An","126":"Quận Hồng Bàng","127":"Quận Kiến An","128":"Quận Lê Chân","129":"Quận Ngô Quyền"}},"5":{"name":"Thành phố Hồ Chí Minh","districts":{"131":"Huyện Bình Chánh","132":"Huyện Cần Giờ","133":"Huyện Củ Chi","134":"Huyện Hóc Môn","135":"Huyện Nhà Bè","136":"Quận 1","137":"Quận 10","138":"Quận 11","139":"Quận 12","140":"Quận 2","141":"Quận 3","142":"Quận 4","143":"Quận 5","144":"Quận 6","145":"Quận 7","146":"Quận 8","147":"Quận 9","148":"Quận Bình Tân","149":"Quận Bình Thạnh","150":"Quận Gò Vấp","151":"Quận Phú Nhuận","152":"Quận Tân Bình","153":"Quận Tân Phú","154":"Quận Thủ Đức"}},"6":{"name":"Tỉnh An Giang","districts":{"155":"Huyện An Phú","156":"Huyện Châu Phú","157":"Huyện Châu Thành","158":"Huyện Chợ Mới","159":"Huyện Phú Tân","160":"Huyện Thoại Sơn","161":"Huyện Tịnh Biên","162":"Huyện Tri Tôn","163":"Thành phố Long Xuyên","164":"Thị xã Châu Đốc","165":"Thị xã Tân Châu"}},"7":{"name":"Tỉnh Bà Rịa-Vũng Tàu","districts":{"166":"Huyện Châu Đức","167":"Huyện Côn Đảo","168":"Huyện Đất Đỏ","169":"Huyện Long Điền","170":"Huyện Tân Thành","171":"Huyện Xuyên Mộc","172":"Thành phố Vũng Tàu","173":"Thị xã Bà Rịa"}},"8":{"name":"Tỉnh Bắc Giang","districts":{"174":"Huyện Hiệp Hòa","175":"Huyện Lạng Giang","176":"Huyện Lục Nam","177":"Huyện Lục Ngạn","178":"Huyện Sơn Động","179":"Huyện Tân Yên","180":"Huyện Việt Yên","181":"Huyện Yên Dũng","182":"Huyện Yên Thế","183":"Thành phố Bắc Giang"}},"9":{"name":"Tỉnh Bắc Kạn","districts":{"184":"Huyện Ba Bể","185":"Huyện Bạch Thông","186":"Huyện Chợ Đồn","187":"Huyện Chợ Mới","188":"Huyện Na Rì","189":"Huyện Ngân Sơn","190":"Huyện Pác Nặm","191":"Thị xã Bắc Kạn"}},"10":{"name":"Tỉnh Bạc Liêu","districts":{"192":"Huyện Đông Hải","193":"Huyện Giá Rai","194":"Huyện Hòa Bình","195":"Huyện Hồng Dân","196":"Huyện Phước Long","197":"Huyện Vĩnh Lợi","198":"Thành Phố Bạc Liêu"}},"11":{"name":"Tỉnh Bắc Ninh","districts":{"199":"Huyện Gia Bình","200":"Huyện Lương Tài","201":"Huyện Quế Võ","202":"Huyện Thuận Thành","203":"Huyện Tiên Du","204":"Huyện Yên Phong","205":"Thành phố Bắc Ninh","206":"Thị xã Từ Sơn"}},"12":{"name":"Tỉnh Bến Tre","districts":{"207":"Huyện Ba Tri","208":"Huyện Bình Đại","209":"Huyện Châu Thành","210":"Huyện Chợ Lách","211":"Huyện Giồng Trôm","212":"Huyện Mỏ Cày Bắc","213":"Huyện Mỏ Cày Nam","214":"Huyện Thạnh Phú","215":"Thành phố Bến Tre"}},"13":{"name":"Tỉnh Bình Định","districts":{"216":"Huyện An Lão","217":"Huyện An Nhơn","218":"Huyện Hoài  Ân","219":"Huyện Hoài Nhơn","220":"Huyện Phù Mỹ","221":"Huyện Phù cát","222":"Huyện Tây Sơn","223":"Huyện Tuy Phước","224":"Huyện Vân Canh","225":"Huyện Vĩnh Thạnh","226":"Thành phố Quy Nhơn"}},"14":{"name":"Tỉnh Bình Dương","districts":{"227":"Huyện Bến Cát","228":"Huyện Dầu Tiếng","229":"Huyện Dĩ An","230":"Huyện Phú Giáo","231":"Huyện Tân Uyên","232":"Huyện Thuận An","233":"Thị xã Thủ Dầu Một"}},"15":{"name":"Tỉnh Bình Phước","districts":{"234":"Huyện Bù Đăng","235":"Huyện Bù Đốp","236":"Huyện Bù Gia Mập","237":"Huyện Chơn Thành","238":"Huyện Đồng Phú","239":"Huyện Hớn Quản","240":"Huyện Lộc Ninh","241":"Thị xã Bình Long","242":"Thị xã Đồng Xoài","243":"Thị xã Phước Long"}},"16":{"name":"Tỉnh Bình Thuận","districts":{"244":"Huyện  Đức Linh","245":"Huyện Bắc Bình","246":"Huyện Hàm Tân","247":"Huyện Hàm Thuận Bắc","248":"Huyện Hàm Thuận Nam","249":"Huyện Phú Qúi","250":"Huyện Tánh Linh","251":"Huyện Tuy Phong","252":"Thành phố Phan Thiết","253":"Thị xã La Gi"}},"17":{"name":"Tỉnh Cà Mau","districts":{"254":"Huyện Cái Nước","255":"Huyện Đầm Dơi","256":"Huyện Năm Căn","257":"Huyện Ngọc Hiển","258":"Huyện Phú Tân","259":"Huyện Thới Bình","260":"Huyện Trần Văn Thời","261":"Huyện U Minh","262":"Thành phố Cà Mau"}},"18":{"name":"Tỉnh Cao Bằng","districts":{"263":"Huyện Bảo Lạc","264":"Huyện Bảo Lâm","265":"Huyện Hạ Lang","266":"Huyện Hà Quảng","267":"Huyện Hòa An","268":"Huyện Nguyên Bình","269":"Huyện Phục Hòa","270":"Huyện Quảng Uyên","271":"Huyện Thạch An","272":"Huyện Thông Nông","273":"Huyện Trà Lĩnh","274":"Huyện Trùng Khánh","275":"Thị xã Cao Bằng"}},"19":{"name":"Tỉnh Đắk Lắk","districts":{"276":"Huyện Buôn Đôn","277":"Huyện Cư Kuin","278":"Huyện Cư MGar","279":"Huyện Ea Kar","280":"Huyện Ea Súp","281":"Huyện EaHLeo","282":"Huyện Krông Ana","283":"Huyện Krông Bông","284":"Huyện Krông Búk","285":"Huyện Krông Năng","286":"Huyện Krông Pắc","287":"Huyện Lắk","288":"Huyện MDrắk","289":"Thành phố Buôn Ma Thuột","290":"Thị xã Buôn Hồ"}},"20":{"name":"Tỉnh Đắk Nông","districts":{"291":"Huyện Cư Jút","292":"Huyện Đắk GLong","293":"Huyện Đắk Mil","294":"Huyện Đắk RLấp","295":"Huyện Đắk Song","296":"Huyện KRông Nô","297":"Huyện Tuy Đức","298":"Thị xã Gia Nghĩa"}},"21":{"name":"Tỉnh Điện Biên","districts":{"299":"Huyện Điện Biên","300":"Huyện Điện Biên Đông","301":"Huyện Mường Chà","302":"Huyện Mương Nhé","303":"Huyện Mường ảng","304":"Huyện Tủa Chùa","305":"Huyện Tuần Giáo","306":"Thành phố Điện Biên phủ","307":"Thị xã Mường Lay"}},"22":{"name":"Tỉnh Đồng Nai","districts":{"308":"Huyện Cẩm Mỹ","309":"Huyện Định Quán","310":"Huyện Long Thành","311":"Huyện Nhơn Trạch","312":"Huyện Tân Phú","313":"Huyện Thống Nhất","314":"Huyện Trảng Bom","315":"Huyện Vĩnh Cửu","316":"Huyện Xuân Lộc","317":"Thành phố Biên Hòa","318":"Thị xã Long Khánh"}},"23":{"name":"Tỉnh Đồng Tháp","districts":{"319":"Huyện Cao Lãnh","320":"Huyện Châu Thành","321":"Huyện Hồng Ngự","322":"Huyện Lai Vung","323":"Huyện Lấp Vò","324":"Huyện Tam Nông","325":"Huyện Tân Hồng","326":"Huyện Thanh Bình","327":"Huyện Tháp Mười","328":"Thành phố Cao Lãnh","329":"Thị xã Hồng Ngự","330":"Thị xã Sa Đéc"}},"24":{"name":"Tỉnh Gia Lai","districts":{"331":"Huyện Chư Păh","332":"Huyện Chư Pưh","333":"Huyện Chư Sê","334":"Huyện ChưPRông","335":"Huyện Đăk Đoa","336":"Huyện Đăk Pơ","337":"Huyện Đức Cơ","338":"Huyện Ia Grai","339":"Huyện Ia Pa","340":"Huyện KBang","341":"Huyện KBang","342":"Huyện Kông Chro","343":"Huyện Krông Pa","344":"Huyện Mang Yang","345":"Huyện Phú Thiện","346":"Thành phố Plei Ku","347":"Thị xã AYun Pa","348":"Thị xã An Khê"}},"25":{"name":"Tỉnh Hà Giang","districts":{"349":"Huyện Bắc Mê","350":"Huyện Bắc Quang","351":"Huyện Đồng Văn","352":"Huyện Hoàng Su Phì","353":"Huyện Mèo Vạc","354":"Huyện Quản Bạ","355":"Huyện Quang Bình","356":"Huyện Vị Xuyên","357":"Huyện Xín Mần","358":"Huyện Yên Minh","359":"Thành Phố Hà Giang"}},"26":{"name":"Tỉnh Hà Nam","districts":{"360":"Huyện Bình Lục","361":"Huyện Duy Tiên","362":"Huyện Kim Bảng","363":"Huyện Lý Nhân","364":"Huyện Thanh Liêm","365":"Thành phố Phủ Lý"}},"27":{"name":"Tỉnh Hà Tĩnh","districts":{"366":"Huyện Cẩm Xuyên","367":"Huyện Can Lộc","368":"Huyện Đức Thọ","369":"Huyện Hương Khê","370":"Huyện Hương Sơn","371":"Huyện Kỳ Anh","372":"Huyện Lộc Hà","373":"Huyện Nghi Xuân","374":"Huyện Thạch Hà","375":"Huyện Vũ Quang","376":"Thành phố Hà Tĩnh","377":"Thị xã Hồng Lĩnh"}},"28":{"name":"Tỉnh Hải Dương","districts":{"378":"Huyện Bình Giang","379":"Huyện Cẩm Giàng","380":"Huyện Gia Lộc","381":"Huyện Kim Thành","382":"Huyện Kinh Môn","383":"Huyện Nam Sách","384":"Huyện Ninh Giang","385":"Huyện Thanh Hà","386":"Huyện Thanh Miện","387":"Huyện Tứ Kỳ","388":"Thành phố Hải Dương","389":"Thị xã Chí Linh"}},"29":{"name":"Tỉnh Hậu Giang","districts":{"390":"Huyện Châu Thành","391":"Huyện Châu Thành A","392":"Huyện Long Mỹ","393":"Huyện Phụng Hiệp","394":"Huyện Vị Thủy","395":"Thành Phố Vị Thanh","396":"Thị xã Ngã Bảy"}},"30":{"name":"Tỉnh Hòa Bình","districts":{"397":"Huyện Cao Phong","398":"Huyện Đà Bắc","399":"Huyện Kim Bôi","400":"Huyện Kỳ Sơn","401":"Huyện Lạc Sơn","402":"Huyện Lạc Thủy","403":"Huyện Lương Sơn","404":"Huyện Mai Châu","405":"Huyện Tân Lạc","406":"Huyện Yên Thủy","407":"Thành phố Hòa Bình"}},"31":{"name":"Tỉnh Hưng Yên","districts":{"408":"Huyện Ân Thi","409":"Huyện Khoái Châu","410":"Huyện Kim Động","411":"Huyện Mỹ Hào","412":"Huyện Phù Cừ","413":"Huyện Tiên Lữ","414":"Huyện Văn Giang","415":"Huyện Văn Lâm","416":"Huyện Yên Mỹ","417":"Thành phố Hưng Yên"}},"32":{"name":"Tỉnh Khánh Hòa","districts":{"418":"Huyện Cam Lâm","419":"Huyện Diên Khánh","420":"Huyện Khánh Sơn","421":"Huyện Khánh Vĩnh","422":"Huyện Ninh Hòa","423":"Huyện Trường Sa","424":"Huyện Vạn Ninh","425":"Thành phố Nha Trang","426":"Thị xã Cam Ranh"}},"33":{"name":"Tỉnh Kiên Giang","districts":{"427":"Huyện An Biên","428":"Huyện An Minh","429":"Huyện Châu Thành","430":"Huyện Giang Thành","431":"Huyện Giồng Riềng","432":"Huyện Gò Quao","433":"Huyện Hòn Đất","434":"Huyện Kiên Hải","435":"Huyện Kiên Lương","436":"Huyện Phú Quốc","437":"Huyện Tân Hiệp","438":"Huyện U Minh Thượng","439":"Huyện Vĩnh Thuận","440":"Thành phố Rạch Giá","441":"Thị xã Hà Tiên"}},"34":{"name":"Tỉnh Kon Tum","districts":{"442":"Huyện Đắk Glei","443":"Huyện Đắk Hà","444":"Huyện Đắk Tô","445":"Huyện Kon Plông","446":"Huyện Kon Rẫy","447":"Huyện Ngọc Hồi","448":"Huyện Sa Thầy","449":"Huyện Tu Mơ Rông","450":"Thành phố Kon Tum"}},"35":{"name":"Tỉnh Lai Châu","districts":{"451":"Huyện Mường Tè","452":"Huyện Phong Thổ","453":"Huyện Sìn Hồ","454":"Huyện Tam Đường","455":"Huyện Tân Uyên","456":"Huyện Than Uyên","457":"Thị xã Lai Châu"}},"36":{"name":"Tỉnh Lâm Đồng","districts":{"458":"Huyện Bảo Lâm","459":"Huyện Cát Tiên","460":"Huyện Đạ Huoai","461":"Huyện Đạ Tẻh","462":"Huyện Đam Rông","463":"Huyện Di Linh","464":"Huyện Đơn Dương","465":"Huyện Đức Trọng","466":"Huyện Lạc Dương","467":"Huyện Lâm Hà","468":"Thành phố Bảo Lộc","469":"Thành phố Đà Lạt"}},"37":{"name":"Tỉnh Lạng Sơn","districts":{"470":"Huyện Bắc Sơn","471":"Huyện Bình Gia","472":"Huyện Cao Lộc","473":"Huyện Chi Lăng","474":"Huyện Đình Lập","475":"Huyện Hữu Lũng","476":"Huyện Lộc Bình","477":"Huyện Tràng Định","478":"Huyện Văn Lãng","479":"Huyện Văn Quan","480":"Thành phố Lạng Sơn"}},"38":{"name":"Tỉnh Lào Cai","districts":{"481":"Huyện Bắc Hà","482":"Huyện Bảo Thắng","483":"Huyện Bảo Yên","484":"Huyện Bát Xát","485":"Huyện Mường Khương","486":"Huyện Sa Pa","487":"Huyện Si Ma Cai","488":"Huyện Văn Bàn","489":"Thành phố Lào Cai"}},"39":{"name":"Tỉnh Long An","districts":{"490":"Huyện Bến Lức","491":"Huyện Cần Đước","492":"Huyện Cần Giuộc","493":"Huyện Châu Thành","494":"Huyện Đức Hòa","495":"Huyện Đức Huệ","496":"Huyện Mộc Hóa","497":"Huyện Tân Hưng","498":"Huyện Tân Thạnh","499":"Huyện Tân Trụ","500":"Huyện Thạnh Hóa","501":"Huyện Thủ Thừa","502":"Huyện Vĩnh Hưng","503":"Thành phố Tân An"}},"40":{"name":"Tỉnh Nam Định","districts":{"504":"Huyện Giao Thủy","505":"Huyện Hải Hậu","506":"Huyện Mỹ Lộc","507":"Huyện Nam Trực","508":"Huyện Nghĩa Hưng","509":"Huyện Trực Ninh","510":"Huyện Vụ Bản","511":"Huyện Xuân Trường","512":"Huyện ý Yên","513":"Thành phố Nam Định"}},"41":{"name":"Tỉnh Nghệ An","districts":{"514":"Huyện Anh Sơn","515":"Huyện Con Cuông","516":"Huyện Diễn Châu","517":"Huyện Đô Lương","518":"Huyện Hưng Nguyên","519":"Huyện Kỳ Sơn","520":"Huyện Nam Đàn","521":"Huyện Nghi Lộc","522":"Huyện Nghĩa Đàn","523":"Huyện Quế Phong","524":"Huyện Quỳ Châu","525":"Huyện Quỳ Hợp","526":"Huyện Quỳnh Lưu","527":"Huyện Tân Kỳ","528":"Huyện Thanh Chương","529":"Huyện Tương Dương","530":"Huyện Yên Thành","531":"Thành phố Vinh","532":"Thị xã Cửa Lò","533":"Thị xã Thái Hòa"}},"42":{"name":"Tỉnh Ninh Bình","districts":{"534":"Huyện Gia Viễn","535":"Huyện Hoa Lư","536":"Huyện Kim Sơn","537":"Huyện Nho Quan","538":"Huyện Yên Khánh","539":"Huyện Yên Mô","540":"Thành phố Ninh Bình","541":"Thị xã Tam Điệp"}},"43":{"name":"Tỉnh Ninh Thuận","districts":{"542":"Huyên Bác ái","543":"Huyện Ninh Hải","544":"Huyện Ninh Phước","545":"Huyện Ninh Sơn","546":"Huyện Thuận Bắc","547":"Huyện Thuận Nam","548":"Thành phố Phan Rang-Tháp Chàm"}},"44":{"name":"Tỉnh Phú Thọ","districts":{"549":"Huyện Cẩm Khê","550":"Huyện Đoan Hùng","551":"Huyện Hạ Hòa","552":"Huyện Lâm Thao","553":"Huyện Phù Ninh","554":"Huyện Tam Nông","555":"Huyện Tân Sơn","556":"Huyện Thanh Ba","557":"Huyện Thanh Sơn","558":"Huyện Thanh Thủy","559":"Huyện Yên Lập","560":"Thành phố Việt Trì","561":"Thị xã Phú Thọ"}},"45":{"name":"Tỉnh Phú Yên","districts":{"562":"Huyện Đông Hòa","563":"Huyện Đồng Xuân","564":"Huyện Phú Hòa","565":"Huyện Sơn Hòa","566":"Huyện Sông Hinh","567":"Huyện Tây Hòa","568":"Huyện Tuy An","569":"Thành phố Tuy Hòa","570":"Thị xã Sông Cầu"}},"46":{"name":"Tỉnh Quảng Bình","districts":{"571":"Huyện Bố Trạch","572":"Huyện Lệ Thủy","573":"Huyện MinhHoá","574":"Huyện Quảng Ninh","575":"Huyện Quảng Trạch","576":"Huyện Tuyên Hoá","577":"Thành phố Đồng Hới"}},"47":{"name":"Tỉnh Quảng Nam","districts":{"578":"Huyện Bắc Trà My","579":"Huyện Đại Lộc","580":"Huyện Điện Bàn","581":"Huyện Đông Giang","582":"Huyện Duy Xuyên","583":"Huyện Hiệp Đức","584":"Huyện Nam Giang","585":"Huyện Nam Trà My","586":"Huyện Nông Sơn","587":"Huyện Núi Thành","588":"Huyện Phú Ninh","589":"Huyện Phước Sơn","590":"Huyện Quế Sơn","591":"Huyện Tây Giang","592":"Huyện Thăng Bình","593":"Huyện Tiên Phước","594":"Thành phố Hội An","595":"Thành phố Tam Kỳ"}},"48":{"name":"Tỉnh Quảng Ngãi","districts":{"596":"Huyện Ba Tơ","597":"Huyện Bình Sơn","598":"Huyện Đức Phổ","599":"Huyện Lý sơn","600":"Huyện Minh Long","601":"Huyện Mộ Đức","602":"Huyện Nghĩa Hành","603":"Huyện Sơn Hà","604":"Huyện Sơn Tây","605":"Huyện Sơn Tịnh","606":"Huyện Tây Trà","607":"Huyện Trà Bồng","608":"Huyện Tư Nghĩa","609":"Thành phố Quảng Ngãi"}},"49":{"name":"Tỉnh Quảng Ninh","districts":{"610":"Huyện Ba Chẽ","611":"Huyện Bình Liêu","612":"Huyện Cô Tô","613":"Huyện Đầm Hà","614":"Huyện Đông Triều","615":"Huyện Hải Hà","616":"Huyện Hoành Bồ","617":"Huyện Tiên Yên","618":"Huyện Vân Đồn","619":"Huyện Yên Hưng","620":"Thành phố Hạ Long","621":"Thành phố Móng Cái","622":"Thị xã Cẩm Phả","623":"Thị xã Uông Bí"}},"50":{"name":"Tỉnh Quảng Trị","districts":{"624":"Huyện Cam Lộ","625":"Huyện Cồn Cỏ","626":"Huyện Đa Krông","627":"Huyện Gio Linh","628":"Huyện Hải Lăng","629":"Huyện Hướng Hóa","630":"Huyện Triệu Phong","631":"Huyện Vính Linh","632":"Thành phố Đông Hà","633":"Thị xã Quảng Trị"}},"51":{"name":"Tỉnh Sóc Trăng","districts":{"634":"Huyện Châu Thành","635":"Huyện Cù Lao Dung","636":"Huyện Kế Sách","637":"Huyện Long Phú","638":"Huyện Mỹ Tú","639":"Huyện Mỹ Xuyên","640":"Huyện Ngã Năm","641":"Huyện Thạnh Trị","642":"Huyện Trần Đề","643":"Huyện Vĩnh Châu","644":"Thành phố Sóc Trăng"}},"52":{"name":"Tỉnh Sơn La","districts":{"645":"Huyện Bắc Yên","646":"Huyện Mai Sơn","647":"Huyện Mộc Châu","648":"Huyện Mường La","649":"Huyện Phù Yên","650":"Huyện Quỳnh Nhai","651":"Huyện Sông Mã","652":"Huyện Sốp Cộp","653":"Huyện Thuận Châu","654":"Huyện Yên Châu","655":"Thành phố Sơn La"}},"53":{"name":"Tỉnh Tây Ninh","districts":{"656":"Huyện Bến Cầu","657":"Huyện Châu Thành","658":"Huyện Dương Minh Châu","659":"Huyện Gò Dầu","660":"Huyện Hòa Thành","661":"Huyện Tân Biên","662":"Huyện Tân Châu","663":"Huyện Trảng Bàng","664":"Thị xã Tây Ninh"}},"54":{"name":"Tỉnh Thái Bình","districts":{"665":"Huyện Đông Hưng","666":"Huyện Hưng Hà","667":"Huyện Kiến Xương","668":"Huyện Quỳnh Phụ","669":"Huyện Thái Thụy","670":"Huyện Tiền Hải","671":"Huyện Vũ Thư","672":"Thành phố Thái Bình"}},"55":{"name":"Tỉnh Thái Nguyên","districts":{"673":"Huyện Đại Từ","674":"Huyện Định Hóa","675":"Huyện Đồng Hỷ","676":"Huyện Phổ Yên","677":"Huyện Phú Bình","678":"Huyện Phú Lương","679":"Huyện Võ Nhai","680":"Thành phố Thái Nguyên","681":"Thị xã Sông Công"}},"56":{"name":"Tỉnh Thanh Hóa","districts":{"682":"Huyện Bá Thước","683":"Huyện Cẩm Thủy","684":"Huyện Đông Sơn","685":"Huyện Hà Trung","686":"Huyện Hậu Lộc","687":"Huyện Hoằng Hóa","688":"Huyện Lang Chánh","689":"Huyện Mường Lát","690":"Huyện Nga Sơn","691":"Huyện Ngọc Lặc","692":"Huyện Như Thanh","693":"Huyện Như Xuân","694":"Huyện Nông Cống","695":"Huyện Quan Hóa","696":"Huyện Quan Sơn","697":"Huyện Quảng Xương","698":"Huyện Thạch Thành","699":"Huyện Thiệu Hóa","700":"Huyện Thọ Xuân","701":"Huyện Thường Xuân","702":"Huyện Tĩnh Gia","703":"Huyện Triệu Sơn","704":"Huyện Vĩnh Lộc","705":"Huyện Yên Định","706":"Thành phố Thanh Hóa","707":"Thị xã Bỉm Sơn","708":"Thị xã Sầm Sơn"}},"57":{"name":"Tỉnh Thừa Thiên Huế","districts":{"709":"Huyện A Lưới","710":"Huyện Hương Trà","711":"Huyện Nam Dông","712":"Huyện Phong Điền","713":"Huyện Phú Lộc","714":"Huyện Phú Vang","715":"Huyện Quảng Điền","716":"Thành phố Huế","717":"thị xã Hương Thủy"}},"58":{"name":"Tỉnh Tiền Giang","districts":{"718":"Huyện Cái Bè","719":"Huyện Cai Lậy","720":"Huyện Châu Thành","721":"Huyện Chợ Gạo","722":"Huyện Gò Công Đông","723":"Huyện Gò Công Tây","724":"Huyện Tân Phú Đông","725":"Huyện Tân Phước","726":"Thành phố Mỹ Tho","727":"Thị xã Gò Công"}},"59":{"name":"Tỉnh Trà Vinh","districts":{"728":"Huyện Càng Long","729":"Huyện Cầu Kè","730":"Huyện Cầu Ngang","731":"Huyện Châu Thành","732":"Huyện Duyên Hải","733":"Huyện Tiểu Cần","734":"Huyện Trà Cú","735":"Thành phố Trà Vinh"}},"60":{"name":"Tỉnh Tuyên Quang","districts":{"736":"Huyện Chiêm Hóa","737":"Huyện Hàm Yên","738":"Huyện Na hang","739":"Huyện Sơn Dương","740":"Huyện Yên Sơn","741":"Thành phố Tuyên Quang"}},"61":{"name":"Tỉnh Vĩnh Long","districts":{"742":"Huyện Bình Minh","743":"Huyện Bình Tân","744":"Huyện Long Hồ","745":"Huyện Mang Thít","746":"Huyện Tam Bình","747":"Huyện Trà Ôn","748":"Huyện Vũng Liêm","749":"Thành phố Vĩnh Long"}},"62":{"name":"Tỉnh Vĩnh Phúc","districts":{"750":"Huyện Bình Xuyên","751":"Huyện Lập Thạch","752":"Huyện Sông Lô","753":"Huyện Tam Đảo","754":"Huyện Tam Dương","755":"Huyện Vĩnh Tường","756":"Huyện Yên Lạc","757":"Thành phố Vĩnh Yên","758":"Thị xã Phúc Yên"}},"63":{"name":"Tỉnh Yên Bái","districts":{"759":"Huyện Lục Yên","760":"Huyện Mù Cang Chải","761":"Huyện Trạm Tấu","762":"Huyện Trấn Yên","763":"Huyện Văn Chấn","764":"Huyện Văn Yên","765":"Huyện Yên Bình","766":"Thành phố Yên Bái","767":"Thị xã Nghĩa Lộ"}}}

        var html='';
        for(var key in data)
        {
            if(value == data[key][['name']])
            {
                html += '<option>Chọn quận huyện</option>'
                for(var keys in data[key]['districts'])
                {
                    html += '<option>'+data[key]['districts'][keys]+'</option>'
                }
            }

        }
        $('select[name="ship_wards"]').html(html)
    });

$('.select-search').select2();
if (Array.prototype.forEach) {
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
}
else {
    var elems = document.querySelectorAll('.switchery');
    for (var i = 0; i < elems.length; i++) {
        var switchery = new Switchery(elems[i]);
    }
}
$('.profile-customer').click(function () {
    $('#profile_customer').modal('show')
})
$('#avatar').change(function () {
    upload_avatar(window.location.origin+'/api/employees/upload-avatar',this)
})
$('#avatar_customers').change(function () {

    upload_avatar(window.location.origin+'/api/customers/upload-avatar',this)
})
$('select[name="state_province"]').change(function () {
    var value = $(this).val();
    var data = {"1":{"name":"Thành phố Cần Thơ","districts":{"66":"Huyện Cờ Đỏ","67":"Huyện Phong Điền","68":"Huyện Thới Lai","69":"Huyện Vĩnh Thạnh","70":"Quận Bình Thủy","71":"Quận Cái Răng","72":"Quận Ninh Kiều","73":"Quận Ô Môn","74":"Quận Thốt Nốt"}},"2":{"name":"Thành phố Đà Nẵng","districts":{"76":"Huyện Hòa Vang","77":"Huyện Hoàng Sa","78":"Quận Cẩm Lệ","79":"Quận Hải Châu","80":"Quận Liên Chiểu","81":"Quận Ngũ Hành Sơn","82":"Quận Sơn Trà","83":"Quận Thanh Khê"}},"3":{"name":"Thành phố Hà Nội","districts":{"85":"Huyện Ba Vì","86":"Huyện Chương Mỹ","87":"Huyện Đan Phượng","88":"Huyện Đông Anh","89":"Huyện Gia Lâm","90":"Huyện Hoài Đức","91":"Huyện Mê Linh","92":"Huyện Mỹ Đức","93":"Huyện Phú Xuyên","94":"Huyện Phúc Thọ","95":"Huyện Quốc Oai","96":"Huyện Sóc Sơn","97":"Huyện Thạch Thất","98":"Huyện Thanh Oai","99":"Huyện Thanh Trì","100":"Huyện Thường Tín","101":"Huyện Từ Liêm","102":"Huyện ứng Hòa","103":"Quận Ba Đình","104":"Quận Cầu Giấy","105":"Quận Đống Đa","106":"Quận Hà Đông","107":"Quận Hai Bà Trưng","108":"Quận Hoàn Kiếm","109":"Quận Hoàng Mai","110":"Quận Long Biên","111":"Quận Tây Hồ","112":"Quận Thanh Xuân","113":"Thị xã Sơn Tây"}},"4":{"name":"Thành phố Hải Phòng","districts":{"115":"Huyện An Dương","116":"Huyện An Lão","117":"Huyện Bạch Long Vĩ","118":"Huyện Cát Hải","119":"Huyện Kiến Thụy","120":"Huyện Thủy Nguyên","121":"Huyện Tiên Lãng","122":"Huyện Vĩnh Bảo","123":"Quận Đồ Sơn","124":"Quận Dương Kinh","125":"Quận Hải An","126":"Quận Hồng Bàng","127":"Quận Kiến An","128":"Quận Lê Chân","129":"Quận Ngô Quyền"}},"5":{"name":"Thành phố Hồ Chí Minh","districts":{"131":"Huyện Bình Chánh","132":"Huyện Cần Giờ","133":"Huyện Củ Chi","134":"Huyện Hóc Môn","135":"Huyện Nhà Bè","136":"Quận 1","137":"Quận 10","138":"Quận 11","139":"Quận 12","140":"Quận 2","141":"Quận 3","142":"Quận 4","143":"Quận 5","144":"Quận 6","145":"Quận 7","146":"Quận 8","147":"Quận 9","148":"Quận Bình Tân","149":"Quận Bình Thạnh","150":"Quận Gò Vấp","151":"Quận Phú Nhuận","152":"Quận Tân Bình","153":"Quận Tân Phú","154":"Quận Thủ Đức"}},"6":{"name":"Tỉnh An Giang","districts":{"155":"Huyện An Phú","156":"Huyện Châu Phú","157":"Huyện Châu Thành","158":"Huyện Chợ Mới","159":"Huyện Phú Tân","160":"Huyện Thoại Sơn","161":"Huyện Tịnh Biên","162":"Huyện Tri Tôn","163":"Thành phố Long Xuyên","164":"Thị xã Châu Đốc","165":"Thị xã Tân Châu"}},"7":{"name":"Tỉnh Bà Rịa-Vũng Tàu","districts":{"166":"Huyện Châu Đức","167":"Huyện Côn Đảo","168":"Huyện Đất Đỏ","169":"Huyện Long Điền","170":"Huyện Tân Thành","171":"Huyện Xuyên Mộc","172":"Thành phố Vũng Tàu","173":"Thị xã Bà Rịa"}},"8":{"name":"Tỉnh Bắc Giang","districts":{"174":"Huyện Hiệp Hòa","175":"Huyện Lạng Giang","176":"Huyện Lục Nam","177":"Huyện Lục Ngạn","178":"Huyện Sơn Động","179":"Huyện Tân Yên","180":"Huyện Việt Yên","181":"Huyện Yên Dũng","182":"Huyện Yên Thế","183":"Thành phố Bắc Giang"}},"9":{"name":"Tỉnh Bắc Kạn","districts":{"184":"Huyện Ba Bể","185":"Huyện Bạch Thông","186":"Huyện Chợ Đồn","187":"Huyện Chợ Mới","188":"Huyện Na Rì","189":"Huyện Ngân Sơn","190":"Huyện Pác Nặm","191":"Thị xã Bắc Kạn"}},"10":{"name":"Tỉnh Bạc Liêu","districts":{"192":"Huyện Đông Hải","193":"Huyện Giá Rai","194":"Huyện Hòa Bình","195":"Huyện Hồng Dân","196":"Huyện Phước Long","197":"Huyện Vĩnh Lợi","198":"Thành Phố Bạc Liêu"}},"11":{"name":"Tỉnh Bắc Ninh","districts":{"199":"Huyện Gia Bình","200":"Huyện Lương Tài","201":"Huyện Quế Võ","202":"Huyện Thuận Thành","203":"Huyện Tiên Du","204":"Huyện Yên Phong","205":"Thành phố Bắc Ninh","206":"Thị xã Từ Sơn"}},"12":{"name":"Tỉnh Bến Tre","districts":{"207":"Huyện Ba Tri","208":"Huyện Bình Đại","209":"Huyện Châu Thành","210":"Huyện Chợ Lách","211":"Huyện Giồng Trôm","212":"Huyện Mỏ Cày Bắc","213":"Huyện Mỏ Cày Nam","214":"Huyện Thạnh Phú","215":"Thành phố Bến Tre"}},"13":{"name":"Tỉnh Bình Định","districts":{"216":"Huyện An Lão","217":"Huyện An Nhơn","218":"Huyện Hoài  Ân","219":"Huyện Hoài Nhơn","220":"Huyện Phù Mỹ","221":"Huyện Phù cát","222":"Huyện Tây Sơn","223":"Huyện Tuy Phước","224":"Huyện Vân Canh","225":"Huyện Vĩnh Thạnh","226":"Thành phố Quy Nhơn"}},"14":{"name":"Tỉnh Bình Dương","districts":{"227":"Huyện Bến Cát","228":"Huyện Dầu Tiếng","229":"Huyện Dĩ An","230":"Huyện Phú Giáo","231":"Huyện Tân Uyên","232":"Huyện Thuận An","233":"Thị xã Thủ Dầu Một"}},"15":{"name":"Tỉnh Bình Phước","districts":{"234":"Huyện Bù Đăng","235":"Huyện Bù Đốp","236":"Huyện Bù Gia Mập","237":"Huyện Chơn Thành","238":"Huyện Đồng Phú","239":"Huyện Hớn Quản","240":"Huyện Lộc Ninh","241":"Thị xã Bình Long","242":"Thị xã Đồng Xoài","243":"Thị xã Phước Long"}},"16":{"name":"Tỉnh Bình Thuận","districts":{"244":"Huyện  Đức Linh","245":"Huyện Bắc Bình","246":"Huyện Hàm Tân","247":"Huyện Hàm Thuận Bắc","248":"Huyện Hàm Thuận Nam","249":"Huyện Phú Qúi","250":"Huyện Tánh Linh","251":"Huyện Tuy Phong","252":"Thành phố Phan Thiết","253":"Thị xã La Gi"}},"17":{"name":"Tỉnh Cà Mau","districts":{"254":"Huyện Cái Nước","255":"Huyện Đầm Dơi","256":"Huyện Năm Căn","257":"Huyện Ngọc Hiển","258":"Huyện Phú Tân","259":"Huyện Thới Bình","260":"Huyện Trần Văn Thời","261":"Huyện U Minh","262":"Thành phố Cà Mau"}},"18":{"name":"Tỉnh Cao Bằng","districts":{"263":"Huyện Bảo Lạc","264":"Huyện Bảo Lâm","265":"Huyện Hạ Lang","266":"Huyện Hà Quảng","267":"Huyện Hòa An","268":"Huyện Nguyên Bình","269":"Huyện Phục Hòa","270":"Huyện Quảng Uyên","271":"Huyện Thạch An","272":"Huyện Thông Nông","273":"Huyện Trà Lĩnh","274":"Huyện Trùng Khánh","275":"Thị xã Cao Bằng"}},"19":{"name":"Tỉnh Đắk Lắk","districts":{"276":"Huyện Buôn Đôn","277":"Huyện Cư Kuin","278":"Huyện Cư MGar","279":"Huyện Ea Kar","280":"Huyện Ea Súp","281":"Huyện EaHLeo","282":"Huyện Krông Ana","283":"Huyện Krông Bông","284":"Huyện Krông Búk","285":"Huyện Krông Năng","286":"Huyện Krông Pắc","287":"Huyện Lắk","288":"Huyện MDrắk","289":"Thành phố Buôn Ma Thuột","290":"Thị xã Buôn Hồ"}},"20":{"name":"Tỉnh Đắk Nông","districts":{"291":"Huyện Cư Jút","292":"Huyện Đắk GLong","293":"Huyện Đắk Mil","294":"Huyện Đắk RLấp","295":"Huyện Đắk Song","296":"Huyện KRông Nô","297":"Huyện Tuy Đức","298":"Thị xã Gia Nghĩa"}},"21":{"name":"Tỉnh Điện Biên","districts":{"299":"Huyện Điện Biên","300":"Huyện Điện Biên Đông","301":"Huyện Mường Chà","302":"Huyện Mương Nhé","303":"Huyện Mường ảng","304":"Huyện Tủa Chùa","305":"Huyện Tuần Giáo","306":"Thành phố Điện Biên phủ","307":"Thị xã Mường Lay"}},"22":{"name":"Tỉnh Đồng Nai","districts":{"308":"Huyện Cẩm Mỹ","309":"Huyện Định Quán","310":"Huyện Long Thành","311":"Huyện Nhơn Trạch","312":"Huyện Tân Phú","313":"Huyện Thống Nhất","314":"Huyện Trảng Bom","315":"Huyện Vĩnh Cửu","316":"Huyện Xuân Lộc","317":"Thành phố Biên Hòa","318":"Thị xã Long Khánh"}},"23":{"name":"Tỉnh Đồng Tháp","districts":{"319":"Huyện Cao Lãnh","320":"Huyện Châu Thành","321":"Huyện Hồng Ngự","322":"Huyện Lai Vung","323":"Huyện Lấp Vò","324":"Huyện Tam Nông","325":"Huyện Tân Hồng","326":"Huyện Thanh Bình","327":"Huyện Tháp Mười","328":"Thành phố Cao Lãnh","329":"Thị xã Hồng Ngự","330":"Thị xã Sa Đéc"}},"24":{"name":"Tỉnh Gia Lai","districts":{"331":"Huyện Chư Păh","332":"Huyện Chư Pưh","333":"Huyện Chư Sê","334":"Huyện ChưPRông","335":"Huyện Đăk Đoa","336":"Huyện Đăk Pơ","337":"Huyện Đức Cơ","338":"Huyện Ia Grai","339":"Huyện Ia Pa","340":"Huyện KBang","341":"Huyện KBang","342":"Huyện Kông Chro","343":"Huyện Krông Pa","344":"Huyện Mang Yang","345":"Huyện Phú Thiện","346":"Thành phố Plei Ku","347":"Thị xã AYun Pa","348":"Thị xã An Khê"}},"25":{"name":"Tỉnh Hà Giang","districts":{"349":"Huyện Bắc Mê","350":"Huyện Bắc Quang","351":"Huyện Đồng Văn","352":"Huyện Hoàng Su Phì","353":"Huyện Mèo Vạc","354":"Huyện Quản Bạ","355":"Huyện Quang Bình","356":"Huyện Vị Xuyên","357":"Huyện Xín Mần","358":"Huyện Yên Minh","359":"Thành Phố Hà Giang"}},"26":{"name":"Tỉnh Hà Nam","districts":{"360":"Huyện Bình Lục","361":"Huyện Duy Tiên","362":"Huyện Kim Bảng","363":"Huyện Lý Nhân","364":"Huyện Thanh Liêm","365":"Thành phố Phủ Lý"}},"27":{"name":"Tỉnh Hà Tĩnh","districts":{"366":"Huyện Cẩm Xuyên","367":"Huyện Can Lộc","368":"Huyện Đức Thọ","369":"Huyện Hương Khê","370":"Huyện Hương Sơn","371":"Huyện Kỳ Anh","372":"Huyện Lộc Hà","373":"Huyện Nghi Xuân","374":"Huyện Thạch Hà","375":"Huyện Vũ Quang","376":"Thành phố Hà Tĩnh","377":"Thị xã Hồng Lĩnh"}},"28":{"name":"Tỉnh Hải Dương","districts":{"378":"Huyện Bình Giang","379":"Huyện Cẩm Giàng","380":"Huyện Gia Lộc","381":"Huyện Kim Thành","382":"Huyện Kinh Môn","383":"Huyện Nam Sách","384":"Huyện Ninh Giang","385":"Huyện Thanh Hà","386":"Huyện Thanh Miện","387":"Huyện Tứ Kỳ","388":"Thành phố Hải Dương","389":"Thị xã Chí Linh"}},"29":{"name":"Tỉnh Hậu Giang","districts":{"390":"Huyện Châu Thành","391":"Huyện Châu Thành A","392":"Huyện Long Mỹ","393":"Huyện Phụng Hiệp","394":"Huyện Vị Thủy","395":"Thành Phố Vị Thanh","396":"Thị xã Ngã Bảy"}},"30":{"name":"Tỉnh Hòa Bình","districts":{"397":"Huyện Cao Phong","398":"Huyện Đà Bắc","399":"Huyện Kim Bôi","400":"Huyện Kỳ Sơn","401":"Huyện Lạc Sơn","402":"Huyện Lạc Thủy","403":"Huyện Lương Sơn","404":"Huyện Mai Châu","405":"Huyện Tân Lạc","406":"Huyện Yên Thủy","407":"Thành phố Hòa Bình"}},"31":{"name":"Tỉnh Hưng Yên","districts":{"408":"Huyện Ân Thi","409":"Huyện Khoái Châu","410":"Huyện Kim Động","411":"Huyện Mỹ Hào","412":"Huyện Phù Cừ","413":"Huyện Tiên Lữ","414":"Huyện Văn Giang","415":"Huyện Văn Lâm","416":"Huyện Yên Mỹ","417":"Thành phố Hưng Yên"}},"32":{"name":"Tỉnh Khánh Hòa","districts":{"418":"Huyện Cam Lâm","419":"Huyện Diên Khánh","420":"Huyện Khánh Sơn","421":"Huyện Khánh Vĩnh","422":"Huyện Ninh Hòa","423":"Huyện Trường Sa","424":"Huyện Vạn Ninh","425":"Thành phố Nha Trang","426":"Thị xã Cam Ranh"}},"33":{"name":"Tỉnh Kiên Giang","districts":{"427":"Huyện An Biên","428":"Huyện An Minh","429":"Huyện Châu Thành","430":"Huyện Giang Thành","431":"Huyện Giồng Riềng","432":"Huyện Gò Quao","433":"Huyện Hòn Đất","434":"Huyện Kiên Hải","435":"Huyện Kiên Lương","436":"Huyện Phú Quốc","437":"Huyện Tân Hiệp","438":"Huyện U Minh Thượng","439":"Huyện Vĩnh Thuận","440":"Thành phố Rạch Giá","441":"Thị xã Hà Tiên"}},"34":{"name":"Tỉnh Kon Tum","districts":{"442":"Huyện Đắk Glei","443":"Huyện Đắk Hà","444":"Huyện Đắk Tô","445":"Huyện Kon Plông","446":"Huyện Kon Rẫy","447":"Huyện Ngọc Hồi","448":"Huyện Sa Thầy","449":"Huyện Tu Mơ Rông","450":"Thành phố Kon Tum"}},"35":{"name":"Tỉnh Lai Châu","districts":{"451":"Huyện Mường Tè","452":"Huyện Phong Thổ","453":"Huyện Sìn Hồ","454":"Huyện Tam Đường","455":"Huyện Tân Uyên","456":"Huyện Than Uyên","457":"Thị xã Lai Châu"}},"36":{"name":"Tỉnh Lâm Đồng","districts":{"458":"Huyện Bảo Lâm","459":"Huyện Cát Tiên","460":"Huyện Đạ Huoai","461":"Huyện Đạ Tẻh","462":"Huyện Đam Rông","463":"Huyện Di Linh","464":"Huyện Đơn Dương","465":"Huyện Đức Trọng","466":"Huyện Lạc Dương","467":"Huyện Lâm Hà","468":"Thành phố Bảo Lộc","469":"Thành phố Đà Lạt"}},"37":{"name":"Tỉnh Lạng Sơn","districts":{"470":"Huyện Bắc Sơn","471":"Huyện Bình Gia","472":"Huyện Cao Lộc","473":"Huyện Chi Lăng","474":"Huyện Đình Lập","475":"Huyện Hữu Lũng","476":"Huyện Lộc Bình","477":"Huyện Tràng Định","478":"Huyện Văn Lãng","479":"Huyện Văn Quan","480":"Thành phố Lạng Sơn"}},"38":{"name":"Tỉnh Lào Cai","districts":{"481":"Huyện Bắc Hà","482":"Huyện Bảo Thắng","483":"Huyện Bảo Yên","484":"Huyện Bát Xát","485":"Huyện Mường Khương","486":"Huyện Sa Pa","487":"Huyện Si Ma Cai","488":"Huyện Văn Bàn","489":"Thành phố Lào Cai"}},"39":{"name":"Tỉnh Long An","districts":{"490":"Huyện Bến Lức","491":"Huyện Cần Đước","492":"Huyện Cần Giuộc","493":"Huyện Châu Thành","494":"Huyện Đức Hòa","495":"Huyện Đức Huệ","496":"Huyện Mộc Hóa","497":"Huyện Tân Hưng","498":"Huyện Tân Thạnh","499":"Huyện Tân Trụ","500":"Huyện Thạnh Hóa","501":"Huyện Thủ Thừa","502":"Huyện Vĩnh Hưng","503":"Thành phố Tân An"}},"40":{"name":"Tỉnh Nam Định","districts":{"504":"Huyện Giao Thủy","505":"Huyện Hải Hậu","506":"Huyện Mỹ Lộc","507":"Huyện Nam Trực","508":"Huyện Nghĩa Hưng","509":"Huyện Trực Ninh","510":"Huyện Vụ Bản","511":"Huyện Xuân Trường","512":"Huyện ý Yên","513":"Thành phố Nam Định"}},"41":{"name":"Tỉnh Nghệ An","districts":{"514":"Huyện Anh Sơn","515":"Huyện Con Cuông","516":"Huyện Diễn Châu","517":"Huyện Đô Lương","518":"Huyện Hưng Nguyên","519":"Huyện Kỳ Sơn","520":"Huyện Nam Đàn","521":"Huyện Nghi Lộc","522":"Huyện Nghĩa Đàn","523":"Huyện Quế Phong","524":"Huyện Quỳ Châu","525":"Huyện Quỳ Hợp","526":"Huyện Quỳnh Lưu","527":"Huyện Tân Kỳ","528":"Huyện Thanh Chương","529":"Huyện Tương Dương","530":"Huyện Yên Thành","531":"Thành phố Vinh","532":"Thị xã Cửa Lò","533":"Thị xã Thái Hòa"}},"42":{"name":"Tỉnh Ninh Bình","districts":{"534":"Huyện Gia Viễn","535":"Huyện Hoa Lư","536":"Huyện Kim Sơn","537":"Huyện Nho Quan","538":"Huyện Yên Khánh","539":"Huyện Yên Mô","540":"Thành phố Ninh Bình","541":"Thị xã Tam Điệp"}},"43":{"name":"Tỉnh Ninh Thuận","districts":{"542":"Huyên Bác ái","543":"Huyện Ninh Hải","544":"Huyện Ninh Phước","545":"Huyện Ninh Sơn","546":"Huyện Thuận Bắc","547":"Huyện Thuận Nam","548":"Thành phố Phan Rang-Tháp Chàm"}},"44":{"name":"Tỉnh Phú Thọ","districts":{"549":"Huyện Cẩm Khê","550":"Huyện Đoan Hùng","551":"Huyện Hạ Hòa","552":"Huyện Lâm Thao","553":"Huyện Phù Ninh","554":"Huyện Tam Nông","555":"Huyện Tân Sơn","556":"Huyện Thanh Ba","557":"Huyện Thanh Sơn","558":"Huyện Thanh Thủy","559":"Huyện Yên Lập","560":"Thành phố Việt Trì","561":"Thị xã Phú Thọ"}},"45":{"name":"Tỉnh Phú Yên","districts":{"562":"Huyện Đông Hòa","563":"Huyện Đồng Xuân","564":"Huyện Phú Hòa","565":"Huyện Sơn Hòa","566":"Huyện Sông Hinh","567":"Huyện Tây Hòa","568":"Huyện Tuy An","569":"Thành phố Tuy Hòa","570":"Thị xã Sông Cầu"}},"46":{"name":"Tỉnh Quảng Bình","districts":{"571":"Huyện Bố Trạch","572":"Huyện Lệ Thủy","573":"Huyện MinhHoá","574":"Huyện Quảng Ninh","575":"Huyện Quảng Trạch","576":"Huyện Tuyên Hoá","577":"Thành phố Đồng Hới"}},"47":{"name":"Tỉnh Quảng Nam","districts":{"578":"Huyện Bắc Trà My","579":"Huyện Đại Lộc","580":"Huyện Điện Bàn","581":"Huyện Đông Giang","582":"Huyện Duy Xuyên","583":"Huyện Hiệp Đức","584":"Huyện Nam Giang","585":"Huyện Nam Trà My","586":"Huyện Nông Sơn","587":"Huyện Núi Thành","588":"Huyện Phú Ninh","589":"Huyện Phước Sơn","590":"Huyện Quế Sơn","591":"Huyện Tây Giang","592":"Huyện Thăng Bình","593":"Huyện Tiên Phước","594":"Thành phố Hội An","595":"Thành phố Tam Kỳ"}},"48":{"name":"Tỉnh Quảng Ngãi","districts":{"596":"Huyện Ba Tơ","597":"Huyện Bình Sơn","598":"Huyện Đức Phổ","599":"Huyện Lý sơn","600":"Huyện Minh Long","601":"Huyện Mộ Đức","602":"Huyện Nghĩa Hành","603":"Huyện Sơn Hà","604":"Huyện Sơn Tây","605":"Huyện Sơn Tịnh","606":"Huyện Tây Trà","607":"Huyện Trà Bồng","608":"Huyện Tư Nghĩa","609":"Thành phố Quảng Ngãi"}},"49":{"name":"Tỉnh Quảng Ninh","districts":{"610":"Huyện Ba Chẽ","611":"Huyện Bình Liêu","612":"Huyện Cô Tô","613":"Huyện Đầm Hà","614":"Huyện Đông Triều","615":"Huyện Hải Hà","616":"Huyện Hoành Bồ","617":"Huyện Tiên Yên","618":"Huyện Vân Đồn","619":"Huyện Yên Hưng","620":"Thành phố Hạ Long","621":"Thành phố Móng Cái","622":"Thị xã Cẩm Phả","623":"Thị xã Uông Bí"}},"50":{"name":"Tỉnh Quảng Trị","districts":{"624":"Huyện Cam Lộ","625":"Huyện Cồn Cỏ","626":"Huyện Đa Krông","627":"Huyện Gio Linh","628":"Huyện Hải Lăng","629":"Huyện Hướng Hóa","630":"Huyện Triệu Phong","631":"Huyện Vính Linh","632":"Thành phố Đông Hà","633":"Thị xã Quảng Trị"}},"51":{"name":"Tỉnh Sóc Trăng","districts":{"634":"Huyện Châu Thành","635":"Huyện Cù Lao Dung","636":"Huyện Kế Sách","637":"Huyện Long Phú","638":"Huyện Mỹ Tú","639":"Huyện Mỹ Xuyên","640":"Huyện Ngã Năm","641":"Huyện Thạnh Trị","642":"Huyện Trần Đề","643":"Huyện Vĩnh Châu","644":"Thành phố Sóc Trăng"}},"52":{"name":"Tỉnh Sơn La","districts":{"645":"Huyện Bắc Yên","646":"Huyện Mai Sơn","647":"Huyện Mộc Châu","648":"Huyện Mường La","649":"Huyện Phù Yên","650":"Huyện Quỳnh Nhai","651":"Huyện Sông Mã","652":"Huyện Sốp Cộp","653":"Huyện Thuận Châu","654":"Huyện Yên Châu","655":"Thành phố Sơn La"}},"53":{"name":"Tỉnh Tây Ninh","districts":{"656":"Huyện Bến Cầu","657":"Huyện Châu Thành","658":"Huyện Dương Minh Châu","659":"Huyện Gò Dầu","660":"Huyện Hòa Thành","661":"Huyện Tân Biên","662":"Huyện Tân Châu","663":"Huyện Trảng Bàng","664":"Thị xã Tây Ninh"}},"54":{"name":"Tỉnh Thái Bình","districts":{"665":"Huyện Đông Hưng","666":"Huyện Hưng Hà","667":"Huyện Kiến Xương","668":"Huyện Quỳnh Phụ","669":"Huyện Thái Thụy","670":"Huyện Tiền Hải","671":"Huyện Vũ Thư","672":"Thành phố Thái Bình"}},"55":{"name":"Tỉnh Thái Nguyên","districts":{"673":"Huyện Đại Từ","674":"Huyện Định Hóa","675":"Huyện Đồng Hỷ","676":"Huyện Phổ Yên","677":"Huyện Phú Bình","678":"Huyện Phú Lương","679":"Huyện Võ Nhai","680":"Thành phố Thái Nguyên","681":"Thị xã Sông Công"}},"56":{"name":"Tỉnh Thanh Hóa","districts":{"682":"Huyện Bá Thước","683":"Huyện Cẩm Thủy","684":"Huyện Đông Sơn","685":"Huyện Hà Trung","686":"Huyện Hậu Lộc","687":"Huyện Hoằng Hóa","688":"Huyện Lang Chánh","689":"Huyện Mường Lát","690":"Huyện Nga Sơn","691":"Huyện Ngọc Lặc","692":"Huyện Như Thanh","693":"Huyện Như Xuân","694":"Huyện Nông Cống","695":"Huyện Quan Hóa","696":"Huyện Quan Sơn","697":"Huyện Quảng Xương","698":"Huyện Thạch Thành","699":"Huyện Thiệu Hóa","700":"Huyện Thọ Xuân","701":"Huyện Thường Xuân","702":"Huyện Tĩnh Gia","703":"Huyện Triệu Sơn","704":"Huyện Vĩnh Lộc","705":"Huyện Yên Định","706":"Thành phố Thanh Hóa","707":"Thị xã Bỉm Sơn","708":"Thị xã Sầm Sơn"}},"57":{"name":"Tỉnh Thừa Thiên Huế","districts":{"709":"Huyện A Lưới","710":"Huyện Hương Trà","711":"Huyện Nam Dông","712":"Huyện Phong Điền","713":"Huyện Phú Lộc","714":"Huyện Phú Vang","715":"Huyện Quảng Điền","716":"Thành phố Huế","717":"thị xã Hương Thủy"}},"58":{"name":"Tỉnh Tiền Giang","districts":{"718":"Huyện Cái Bè","719":"Huyện Cai Lậy","720":"Huyện Châu Thành","721":"Huyện Chợ Gạo","722":"Huyện Gò Công Đông","723":"Huyện Gò Công Tây","724":"Huyện Tân Phú Đông","725":"Huyện Tân Phước","726":"Thành phố Mỹ Tho","727":"Thị xã Gò Công"}},"59":{"name":"Tỉnh Trà Vinh","districts":{"728":"Huyện Càng Long","729":"Huyện Cầu Kè","730":"Huyện Cầu Ngang","731":"Huyện Châu Thành","732":"Huyện Duyên Hải","733":"Huyện Tiểu Cần","734":"Huyện Trà Cú","735":"Thành phố Trà Vinh"}},"60":{"name":"Tỉnh Tuyên Quang","districts":{"736":"Huyện Chiêm Hóa","737":"Huyện Hàm Yên","738":"Huyện Na hang","739":"Huyện Sơn Dương","740":"Huyện Yên Sơn","741":"Thành phố Tuyên Quang"}},"61":{"name":"Tỉnh Vĩnh Long","districts":{"742":"Huyện Bình Minh","743":"Huyện Bình Tân","744":"Huyện Long Hồ","745":"Huyện Mang Thít","746":"Huyện Tam Bình","747":"Huyện Trà Ôn","748":"Huyện Vũng Liêm","749":"Thành phố Vĩnh Long"}},"62":{"name":"Tỉnh Vĩnh Phúc","districts":{"750":"Huyện Bình Xuyên","751":"Huyện Lập Thạch","752":"Huyện Sông Lô","753":"Huyện Tam Đảo","754":"Huyện Tam Dương","755":"Huyện Vĩnh Tường","756":"Huyện Yên Lạc","757":"Thành phố Vĩnh Yên","758":"Thị xã Phúc Yên"}},"63":{"name":"Tỉnh Yên Bái","districts":{"759":"Huyện Lục Yên","760":"Huyện Mù Cang Chải","761":"Huyện Trạm Tấu","762":"Huyện Trấn Yên","763":"Huyện Văn Chấn","764":"Huyện Văn Yên","765":"Huyện Yên Bình","766":"Thành phố Yên Bái","767":"Thị xã Nghĩa Lộ"}}}

    var html='';
    for(var key in data)
    {
        if(value == data[key][['name']])
        {
            html += '<option></option>'
            for(var keys in data[key]['districts'])
            {
                html += '<option>'+data[key]['districts'][keys]+'</option>'
            }
        }

    }
    $('select[name="wards"]').html(html)
})
$('.btn-checkbox-all input[type=checkbox]:eq(0)').on('change', function() {
    var data = $('td.table-inbox-checkbox.rowlink-skip input[type="checkbox"]');
    if($(this).is(':checked')) {
        $.map(data,function (i) {
            if(!$(i).is(':checked'))
            {
                $(i).click()
            }
        })

    }
    else {
        $.map(data,function (i) {
            if($(i).is(':checked'))
            {
                $(i).click()
            }
        })
    }
});
$('td.table-inbox-checkbox.rowlink-skip input[type="checkbox"]').change(function () {
    if(!$(this).is(':checked'))
    {
        if($('#inbox-toolbar-toggle-multiple').find('input[type=checkbox]').is(':checked'))
        {
            $('.btn-checkbox-all input[type=checkbox]:eq(0)').prop('checked',false);
            $('.btn-checkbox-all input[type=checkbox]:eq(0)').parent().removeClass('checked')
        }
    }
    else {
        if(check_check_all() == true)
        {
            $('.btn-checkbox-all input[type=checkbox]:eq(0)').prop('checked',true);
            $('.btn-checkbox-all input[type=checkbox]:eq(0)').parent().addClass('checked')
        }

    }
})
})
function upload_avatar(url,control) {
    var file = control.files[0];
    if(file.type !='image/jpeg' && file.type != 'image/jpg' && file.type != 'image/png')
    {
        new PNotify({
            title: 'Cảnh báo',
            text: 'Vui lòng chọn đúng file ảnh',
            addclass: 'bg-danger'
        });
        control.files[0] = undefined
        $(control).val('')
    }
    else if(file.size > 2684354560)
    {

        new PNotify({
            title: 'Lỗi',
            text: 'Vui lòng chọn file có kích cỡ nhỏ hơn 2.5Mb',
            addclass: 'bg-danger'
        });
        control.files[0] = undefined
        $(control).val('')
    }
    else {
        new PNotify({
            title: 'Tải ảnh lên',
            text: 'Đang tải ảnh đại diện',
            addclass: 'bg-info'
        });
        var form_data = new FormData();
        form_data.append('avatar', file);

        form_data.append('id',$(control).attr('data-value'))
        $.ajax({
            url: url, // point to server-side PHP script
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            type: 'post',
            success: function(rep){

                if(rep == false)
                {
                    new PNotify({
                        title: 'Thất bại',
                        text: 'Có lỗi xảy ra. Vui lòng kiểm tra lại',
                        addclass: 'bg-danger'
                    });
                }
                else {

                    new PNotify({
                        title: 'Thành công',
                        text: 'Đã thanh đổi ảnh đại diện thành công',
                        addclass: 'bg-success'
                    });
                    d = new Date();
                    $('#img_avatar').attr('src',rep+'?'+d.getTime())
                }
            },
            error : function (err) {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Có lỗi khi tải ảnh lên',
                    addclass: 'bg-danger'
                });
            }
        });
    }
}
function check_check_all() {
    var data = $('td.table-inbox-checkbox.rowlink-skip input[type="checkbox"]');
    for (var i = 0 ;i< data.length;i++)
    {
        if(!$(data[i]).is(':checked'))
        {
            return false
        }
    }
    return true;
}
$(document).ready(function () {

    $('#form_add_invoice').submit(function(event) {
        var form = new FormData(this)
        var all_product_selected = $('select.select-product')
        var product_selected =[]
        for (var i = all_product_selected.length - 1; i >= 0; i--) {
            var data ={}

            data.id = $(all_product_selected[i]).val()
            if(!kiem_tra_trung_san_pham(data.id,product_selected))
            {
                event.preventDefault()
                new PNotify({
                    title: 'Có lỗi xảy ra',
                    text: 'Có 2 sản phẩm trùng nhau',
                    addclass: 'bg-danger'
                });
                return false
            }
            var color = $(all_product_selected[i]).parents('div.row:eq(0)').nextAll('div.row:eq(0)').find('select.color-product').val()
            var size = $(all_product_selected[i]).parents('div.row:eq(0)').nextAll('div.row:eq(0)').find('select.size-product').val()
            var len = $(all_product_selected[i]).parents('div.row:eq(0)').nextAll('div.row:eq(0)').find('input.len-product').val()
            var note = $(all_product_selected[i]).parents('div.row:eq(0)').nextAll('div.row:eq(0)').find('textarea.notes-product').val()

            data.color = color;
            data.size = size;
            data.len = len;
            data.note = note;

            product_selected.push(data)
        }
        for(var i = 0;i<product_selected.length;i++)
        {
         if(product_selected[i].id =="")
         {
           event.preventDefault()
           new PNotify({
            title: 'Có lỗi xảy ra',
            text: 'Đơn hàng đang trống!',
            addclass: 'bg-danger'
        });
           return false
       }
   }
   form.append('invoice',JSON.stringify(product_selected))

   var req = add_invoice(form)

   if(req.sc == false)
   {
    event.preventDefault()
    new PNotify({
        title: 'Có lỗi xảy ra',
        text: 'Có trong quá trình thêm mới! Vui lòng kiểm tra lại',
        addclass: 'bg-danger'
    });
    return false;
}
else
{
    new PNotify({
        title: 'Thành công',
        text: 'Thêm mới đơn hàng thành công',
        addclass: 'bg-success'
    });
}

event.preventDefault()
setTimeout(function(){

    location.reload();
},2000);
});
    $('.remove-image-product').click(function () {
        var form_data = new FormData()
        var check = true;
        var id = $(this).attr('data-value')
        var link = $(this).attr('data-link');

        form_data.append('id',id)
        form_data.append('link',link)
        $.ajax({
            url: window.location.origin+'/api/products/remove-image', // point to server-side PHP script
            dataType: 'json',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            async: false,
            type: 'post',
            success: function(rep){
                if(rep['sc'] == false)
                {
                    new PNotify({
                        title: 'Thất bại',
                        text: 'Không thể xóa được ảnh. Vui lòng thử lại sau',
                        addclass: 'bg-danger'
                    });
                    check = false;
                    console.log(rep)
                }
                else {
                    new PNotify({
                        title: 'Thành công',
                        text: 'Xóa ảnh thành công',
                        addclass: 'bg-success'
                    });
                }
            },
            error : function (err) {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'

                });
                check = false;
            }
        });
        if(check == true)
        {
            $(this).parents('div.col-lg-3.col-sm-6:eq(0)').fadeOut(1000,function(){
                $(this).remove();
            })
        }


    })
    $('.show-link-image-product').click(function () {
        $('#show-link-image-product input').val($(this).attr('data-value'));
        $('#show-link-image-product').modal('show')
    })

    $('form#products').submit(function(e){
        var code = $('input[name="product_code"]').val();
        var check = true;
        var id = $('input[name="product_code"]').attr('data-value');

        var form_data = new FormData()
        form_data.append('product_code',code)
        if(id != undefined)
        {
            form_data.append('id',id)
        }

        $.ajax({
            url: window.location.origin+'/api/products/check-product-code', // point to server-side PHP script
            dataType: 'json',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            async: false,
            type: 'post',
            success: function(rep){
                if(rep['sc'] == false)
                {
                    new PNotify({
                        title: 'Thất bại',
                        text: 'Mã sản phẩm bạn chọn đã tồn tại',
                        addclass: 'bg-danger'
                    });
                    console.log(rep)
                    check = false;
                }
                else {
                    $(this).submit();
                }
            },
            error : function (err) {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'

                });
                check = false;
            }
        });
        if(check == false)
        {

            e.preventDefault();
        }

    })
    $('#add-product').click(function () {
        var all_product = load_all_product();
        var html_all_product = ''
        for(var i = 0;i< all_product.length;i++)
        {
            html_all_product+= '<option value="'+all_product[i].id+'">'+all_product[i].product_name+'</option>'
        }
        var infor_product = '<div><div class="row">\n' +
        '\t\t\t\t\t\t\t\t\t<div class="col-md-10">\n' +
        '\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
        '\t\t\t\t\t\t\t\t\t\t\t<label>Chọn sản phẩm</label>\n' +
        '\t\t\t\t\t\t\t\t\t\t\t<select data-placeholder="Chọn sản phẩm" class="select select-product" >\n' +

        '\t\t\t\t\t\t\t\t\t\t\t\t<option></option>\n' +
        html_all_product+
        '\t\t\t\t\t\t\t\t\t\t\t</select>\n' +
        '\t\t\t\t\t\t\t\t\t\t</div>\n' +
        '\t\t\t\t\t\t\t\t\t</div>\n' +
        '\t\t\t\t\t\t\t\t\t<div class="col-md-2">\n' +
        '\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
        '\t\t\t\t\t\t\t\t\t\t\t<label>Bỏ chọn sản phẩm</label>\n' +
        '\t\t\t\t\t\t\t\t\t\t\t<button type="button" class="form-control remove-product"><i class="icon-cart-remove"></i></button>\n' +
        '\t\t\t\t\t\t\t\t\t\t</div>\n' +
        '\t\t\t\t\t\t\t\t\t</div>\n' +
        '\t\t\t\t\t\t\t\t</div></div>\n' +
        '</div>';

        $('#all-product').append(infor_product)
        $('.select-fixed-multiple').select2({
            minimumResultsForSearch: Infinity,

        });
        $('.select').select2();
        $('.select-product').change(function (e) {
            $(this).parents('div.row:eq(0)').next().remove()
            //size,color,image
            var id_product = $(this).val()
            var all_color_product = get_color_product(id_product)
            var all_size_product = get_size_product(id_product)
            var all_image_product = get_image_product(id_product)
            var html_color = ''
            for(var i = 0 ;i< all_color_product.length;i++)
            {
                html_color+= '<option value="'+all_color_product[i].color_id+'">'+all_color_product[i].name_color+'</option>'
            }

            var html_size = ''
            for(var i = 0 ;i< all_size_product.length;i++)
            {
                html_size+= '<option value="'+all_size_product[i].size_id+'">'+all_size_product[i].name_size+'</option>'
            }
            if(all_image_product[0] != undefined)
            {
                if(all_image_product[0].link)
                {
                    var html_image = all_image_product[0].link
                }
                else
                    {var html_image = '#'}
            }
            else
                {var html_image = '#'}

            html_image = html_image.replace('public',window.location.origin+'/storage')
            var in_for_product = get_infor_product(id_product);
            var more = '\t\t\t\t\t\t\t\t<div class="row">\n' +
            '\t\t\t\t\t\t\t\t\t<div class="col-md-9">\n' +
            '\t\t\t\t\t\t\t\t\t\t<div class="row">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Kích cỡ:</label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<select data-placeholder="Chọn kích cỡ" multiple="multiple" class="select-fixed-multiple-product size-product">\n' +html_size+
            '\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Màu sản phẩm:</label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<select data-placeholder="Chọn màu" multiple="multiple" class="select-fixed-multiple-product color-product">\n' + html_color+
            '\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Số lượng:</label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label>(x '+parseInt(in_for_product.list_price)+' <sup>đ</sup>)</label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<input type="number" data-value="'+parseInt(in_for_product.list_price)+'" class="form-control len-product" name="" value="1" min="1" placeholder="">\n' +
            '\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t<div class="row">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label class="text-semibold">Phí ship: <i class="price_ship">'+parseInt(in_for_product.price_ship)+'</i><sup>đ</sup></label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label class="text-semibold">Thuế: <i class="taxs">'+in_for_product.tax+' </i><sup>đ</sup></label>\n' +
            '\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-4">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label class="text-semibold">Tổng: <b class="sum">'+parseInt(in_for_product.list_price)+' </b><sup>đ</sup></label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t</div>\n' +

            '\t\t\t\t\t\t\t\t\t\t<div class="row">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="col-md-12">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<div class="form-group">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Thông tin thêm</label>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class="form-control notes-product" cols="8" rows="4"></textarea>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t</div>\n' +


            '\t\t\t\t\t\t\t\t\t</div>\n' +
            '\n' +
            '\t\t\t\t\t\t\t\t\t<div class="col-md-3">\n' +
            '\n' +
            '\t\t\t\t\t\t\t\t\t\t<div class="thumbnail">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t<div class="thumb">\n' +
            '\t\t\t\t\t\t\t\t\t\t\t\t<img src="'+html_image+'" alt="">\n' +
            '\n' +
            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
            '\n' +

            '\t\t\t\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t\t\t</div>'
            if($(this).parents('div.row:eq(0)').next().html() === undefined)
            {
                $(this).parents('div.row:eq(0)').after(more)
                $('.select-fixed-multiple-product').select2({
                    minimumResultsForSearch: Infinity,
                });
            }

            var product_selected =  $.map($('.select-product'),function (item) {
                return $(item).val()
            })
            var val_product_selecting = $(this).val()
            var array_data = product_selected.filter(function(value) {
                return value === val_product_selecting
            })
            if((array_data).length > 1)
            {
                alert('Sản phẩm bạn chọn đã tồn tại! Vui lòng chọn sản phẩm khác!')
            }
            $('input.len-product').bind('keyup mouseup', function () {
                var price = parseInt($(this).attr('data-value'))
                var number = parseInt($(this).val())

                $(this).parents('div.row:eq(0)').next().find('b.sum').html(price*number)
                sum_all_invoice()
            });
            sum_all_invoice()
        })
$('.remove-product').click(function () {
    $(this).parents('div.row:eq(0)').next().remove();
    $(this).parents('div.row:eq(0)').remove();
    sum_all_invoice()
})


})
$('#add-product').click();

load_all_customer();
$('select[name="customer_id"]').change(function(event) {
    var id = parseInt($(this).val())
    var data = get_infor_customer(id);
    data = data[0]
    $('input[name="ship_name"]').val(data.first_name+' '+data.last_name)
    $('input[name="email_address"]').val(data.email_address)
    $('input[name="ship_business_phone"]').val(data.business_phone)
    $('textarea[name="ship_address"]').val(data.address)
    var ship_state_province = $('select[name="ship_state_province"] option')
    for (var i = ship_state_province.length - 1; i >= 0; i--) {

        if($(ship_state_province[i]).val() == data.state_province)
        {
            $('select[name="ship_state_province"]').val(data.state_province).trigger('change.select2');



            var huyen = {"1":{"name":"Thành phố Cần Thơ","districts":{"66":"Huyện Cờ Đỏ","67":"Huyện Phong Điền","68":"Huyện Thới Lai","69":"Huyện Vĩnh Thạnh","70":"Quận Bình Thủy","71":"Quận Cái Răng","72":"Quận Ninh Kiều","73":"Quận Ô Môn","74":"Quận Thốt Nốt"}},"2":{"name":"Thành phố Đà Nẵng","districts":{"76":"Huyện Hòa Vang","77":"Huyện Hoàng Sa","78":"Quận Cẩm Lệ","79":"Quận Hải Châu","80":"Quận Liên Chiểu","81":"Quận Ngũ Hành Sơn","82":"Quận Sơn Trà","83":"Quận Thanh Khê"}},"3":{"name":"Thành phố Hà Nội","districts":{"85":"Huyện Ba Vì","86":"Huyện Chương Mỹ","87":"Huyện Đan Phượng","88":"Huyện Đông Anh","89":"Huyện Gia Lâm","90":"Huyện Hoài Đức","91":"Huyện Mê Linh","92":"Huyện Mỹ Đức","93":"Huyện Phú Xuyên","94":"Huyện Phúc Thọ","95":"Huyện Quốc Oai","96":"Huyện Sóc Sơn","97":"Huyện Thạch Thất","98":"Huyện Thanh Oai","99":"Huyện Thanh Trì","100":"Huyện Thường Tín","101":"Huyện Từ Liêm","102":"Huyện ứng Hòa","103":"Quận Ba Đình","104":"Quận Cầu Giấy","105":"Quận Đống Đa","106":"Quận Hà Đông","107":"Quận Hai Bà Trưng","108":"Quận Hoàn Kiếm","109":"Quận Hoàng Mai","110":"Quận Long Biên","111":"Quận Tây Hồ","112":"Quận Thanh Xuân","113":"Thị xã Sơn Tây"}},"4":{"name":"Thành phố Hải Phòng","districts":{"115":"Huyện An Dương","116":"Huyện An Lão","117":"Huyện Bạch Long Vĩ","118":"Huyện Cát Hải","119":"Huyện Kiến Thụy","120":"Huyện Thủy Nguyên","121":"Huyện Tiên Lãng","122":"Huyện Vĩnh Bảo","123":"Quận Đồ Sơn","124":"Quận Dương Kinh","125":"Quận Hải An","126":"Quận Hồng Bàng","127":"Quận Kiến An","128":"Quận Lê Chân","129":"Quận Ngô Quyền"}},"5":{"name":"Thành phố Hồ Chí Minh","districts":{"131":"Huyện Bình Chánh","132":"Huyện Cần Giờ","133":"Huyện Củ Chi","134":"Huyện Hóc Môn","135":"Huyện Nhà Bè","136":"Quận 1","137":"Quận 10","138":"Quận 11","139":"Quận 12","140":"Quận 2","141":"Quận 3","142":"Quận 4","143":"Quận 5","144":"Quận 6","145":"Quận 7","146":"Quận 8","147":"Quận 9","148":"Quận Bình Tân","149":"Quận Bình Thạnh","150":"Quận Gò Vấp","151":"Quận Phú Nhuận","152":"Quận Tân Bình","153":"Quận Tân Phú","154":"Quận Thủ Đức"}},"6":{"name":"Tỉnh An Giang","districts":{"155":"Huyện An Phú","156":"Huyện Châu Phú","157":"Huyện Châu Thành","158":"Huyện Chợ Mới","159":"Huyện Phú Tân","160":"Huyện Thoại Sơn","161":"Huyện Tịnh Biên","162":"Huyện Tri Tôn","163":"Thành phố Long Xuyên","164":"Thị xã Châu Đốc","165":"Thị xã Tân Châu"}},"7":{"name":"Tỉnh Bà Rịa-Vũng Tàu","districts":{"166":"Huyện Châu Đức","167":"Huyện Côn Đảo","168":"Huyện Đất Đỏ","169":"Huyện Long Điền","170":"Huyện Tân Thành","171":"Huyện Xuyên Mộc","172":"Thành phố Vũng Tàu","173":"Thị xã Bà Rịa"}},"8":{"name":"Tỉnh Bắc Giang","districts":{"174":"Huyện Hiệp Hòa","175":"Huyện Lạng Giang","176":"Huyện Lục Nam","177":"Huyện Lục Ngạn","178":"Huyện Sơn Động","179":"Huyện Tân Yên","180":"Huyện Việt Yên","181":"Huyện Yên Dũng","182":"Huyện Yên Thế","183":"Thành phố Bắc Giang"}},"9":{"name":"Tỉnh Bắc Kạn","districts":{"184":"Huyện Ba Bể","185":"Huyện Bạch Thông","186":"Huyện Chợ Đồn","187":"Huyện Chợ Mới","188":"Huyện Na Rì","189":"Huyện Ngân Sơn","190":"Huyện Pác Nặm","191":"Thị xã Bắc Kạn"}},"10":{"name":"Tỉnh Bạc Liêu","districts":{"192":"Huyện Đông Hải","193":"Huyện Giá Rai","194":"Huyện Hòa Bình","195":"Huyện Hồng Dân","196":"Huyện Phước Long","197":"Huyện Vĩnh Lợi","198":"Thành Phố Bạc Liêu"}},"11":{"name":"Tỉnh Bắc Ninh","districts":{"199":"Huyện Gia Bình","200":"Huyện Lương Tài","201":"Huyện Quế Võ","202":"Huyện Thuận Thành","203":"Huyện Tiên Du","204":"Huyện Yên Phong","205":"Thành phố Bắc Ninh","206":"Thị xã Từ Sơn"}},"12":{"name":"Tỉnh Bến Tre","districts":{"207":"Huyện Ba Tri","208":"Huyện Bình Đại","209":"Huyện Châu Thành","210":"Huyện Chợ Lách","211":"Huyện Giồng Trôm","212":"Huyện Mỏ Cày Bắc","213":"Huyện Mỏ Cày Nam","214":"Huyện Thạnh Phú","215":"Thành phố Bến Tre"}},"13":{"name":"Tỉnh Bình Định","districts":{"216":"Huyện An Lão","217":"Huyện An Nhơn","218":"Huyện Hoài  Ân","219":"Huyện Hoài Nhơn","220":"Huyện Phù Mỹ","221":"Huyện Phù cát","222":"Huyện Tây Sơn","223":"Huyện Tuy Phước","224":"Huyện Vân Canh","225":"Huyện Vĩnh Thạnh","226":"Thành phố Quy Nhơn"}},"14":{"name":"Tỉnh Bình Dương","districts":{"227":"Huyện Bến Cát","228":"Huyện Dầu Tiếng","229":"Huyện Dĩ An","230":"Huyện Phú Giáo","231":"Huyện Tân Uyên","232":"Huyện Thuận An","233":"Thị xã Thủ Dầu Một"}},"15":{"name":"Tỉnh Bình Phước","districts":{"234":"Huyện Bù Đăng","235":"Huyện Bù Đốp","236":"Huyện Bù Gia Mập","237":"Huyện Chơn Thành","238":"Huyện Đồng Phú","239":"Huyện Hớn Quản","240":"Huyện Lộc Ninh","241":"Thị xã Bình Long","242":"Thị xã Đồng Xoài","243":"Thị xã Phước Long"}},"16":{"name":"Tỉnh Bình Thuận","districts":{"244":"Huyện  Đức Linh","245":"Huyện Bắc Bình","246":"Huyện Hàm Tân","247":"Huyện Hàm Thuận Bắc","248":"Huyện Hàm Thuận Nam","249":"Huyện Phú Qúi","250":"Huyện Tánh Linh","251":"Huyện Tuy Phong","252":"Thành phố Phan Thiết","253":"Thị xã La Gi"}},"17":{"name":"Tỉnh Cà Mau","districts":{"254":"Huyện Cái Nước","255":"Huyện Đầm Dơi","256":"Huyện Năm Căn","257":"Huyện Ngọc Hiển","258":"Huyện Phú Tân","259":"Huyện Thới Bình","260":"Huyện Trần Văn Thời","261":"Huyện U Minh","262":"Thành phố Cà Mau"}},"18":{"name":"Tỉnh Cao Bằng","districts":{"263":"Huyện Bảo Lạc","264":"Huyện Bảo Lâm","265":"Huyện Hạ Lang","266":"Huyện Hà Quảng","267":"Huyện Hòa An","268":"Huyện Nguyên Bình","269":"Huyện Phục Hòa","270":"Huyện Quảng Uyên","271":"Huyện Thạch An","272":"Huyện Thông Nông","273":"Huyện Trà Lĩnh","274":"Huyện Trùng Khánh","275":"Thị xã Cao Bằng"}},"19":{"name":"Tỉnh Đắk Lắk","districts":{"276":"Huyện Buôn Đôn","277":"Huyện Cư Kuin","278":"Huyện Cư MGar","279":"Huyện Ea Kar","280":"Huyện Ea Súp","281":"Huyện EaHLeo","282":"Huyện Krông Ana","283":"Huyện Krông Bông","284":"Huyện Krông Búk","285":"Huyện Krông Năng","286":"Huyện Krông Pắc","287":"Huyện Lắk","288":"Huyện MDrắk","289":"Thành phố Buôn Ma Thuột","290":"Thị xã Buôn Hồ"}},"20":{"name":"Tỉnh Đắk Nông","districts":{"291":"Huyện Cư Jút","292":"Huyện Đắk GLong","293":"Huyện Đắk Mil","294":"Huyện Đắk RLấp","295":"Huyện Đắk Song","296":"Huyện KRông Nô","297":"Huyện Tuy Đức","298":"Thị xã Gia Nghĩa"}},"21":{"name":"Tỉnh Điện Biên","districts":{"299":"Huyện Điện Biên","300":"Huyện Điện Biên Đông","301":"Huyện Mường Chà","302":"Huyện Mương Nhé","303":"Huyện Mường ảng","304":"Huyện Tủa Chùa","305":"Huyện Tuần Giáo","306":"Thành phố Điện Biên phủ","307":"Thị xã Mường Lay"}},"22":{"name":"Tỉnh Đồng Nai","districts":{"308":"Huyện Cẩm Mỹ","309":"Huyện Định Quán","310":"Huyện Long Thành","311":"Huyện Nhơn Trạch","312":"Huyện Tân Phú","313":"Huyện Thống Nhất","314":"Huyện Trảng Bom","315":"Huyện Vĩnh Cửu","316":"Huyện Xuân Lộc","317":"Thành phố Biên Hòa","318":"Thị xã Long Khánh"}},"23":{"name":"Tỉnh Đồng Tháp","districts":{"319":"Huyện Cao Lãnh","320":"Huyện Châu Thành","321":"Huyện Hồng Ngự","322":"Huyện Lai Vung","323":"Huyện Lấp Vò","324":"Huyện Tam Nông","325":"Huyện Tân Hồng","326":"Huyện Thanh Bình","327":"Huyện Tháp Mười","328":"Thành phố Cao Lãnh","329":"Thị xã Hồng Ngự","330":"Thị xã Sa Đéc"}},"24":{"name":"Tỉnh Gia Lai","districts":{"331":"Huyện Chư Păh","332":"Huyện Chư Pưh","333":"Huyện Chư Sê","334":"Huyện ChưPRông","335":"Huyện Đăk Đoa","336":"Huyện Đăk Pơ","337":"Huyện Đức Cơ","338":"Huyện Ia Grai","339":"Huyện Ia Pa","340":"Huyện KBang","341":"Huyện KBang","342":"Huyện Kông Chro","343":"Huyện Krông Pa","344":"Huyện Mang Yang","345":"Huyện Phú Thiện","346":"Thành phố Plei Ku","347":"Thị xã AYun Pa","348":"Thị xã An Khê"}},"25":{"name":"Tỉnh Hà Giang","districts":{"349":"Huyện Bắc Mê","350":"Huyện Bắc Quang","351":"Huyện Đồng Văn","352":"Huyện Hoàng Su Phì","353":"Huyện Mèo Vạc","354":"Huyện Quản Bạ","355":"Huyện Quang Bình","356":"Huyện Vị Xuyên","357":"Huyện Xín Mần","358":"Huyện Yên Minh","359":"Thành Phố Hà Giang"}},"26":{"name":"Tỉnh Hà Nam","districts":{"360":"Huyện Bình Lục","361":"Huyện Duy Tiên","362":"Huyện Kim Bảng","363":"Huyện Lý Nhân","364":"Huyện Thanh Liêm","365":"Thành phố Phủ Lý"}},"27":{"name":"Tỉnh Hà Tĩnh","districts":{"366":"Huyện Cẩm Xuyên","367":"Huyện Can Lộc","368":"Huyện Đức Thọ","369":"Huyện Hương Khê","370":"Huyện Hương Sơn","371":"Huyện Kỳ Anh","372":"Huyện Lộc Hà","373":"Huyện Nghi Xuân","374":"Huyện Thạch Hà","375":"Huyện Vũ Quang","376":"Thành phố Hà Tĩnh","377":"Thị xã Hồng Lĩnh"}},"28":{"name":"Tỉnh Hải Dương","districts":{"378":"Huyện Bình Giang","379":"Huyện Cẩm Giàng","380":"Huyện Gia Lộc","381":"Huyện Kim Thành","382":"Huyện Kinh Môn","383":"Huyện Nam Sách","384":"Huyện Ninh Giang","385":"Huyện Thanh Hà","386":"Huyện Thanh Miện","387":"Huyện Tứ Kỳ","388":"Thành phố Hải Dương","389":"Thị xã Chí Linh"}},"29":{"name":"Tỉnh Hậu Giang","districts":{"390":"Huyện Châu Thành","391":"Huyện Châu Thành A","392":"Huyện Long Mỹ","393":"Huyện Phụng Hiệp","394":"Huyện Vị Thủy","395":"Thành Phố Vị Thanh","396":"Thị xã Ngã Bảy"}},"30":{"name":"Tỉnh Hòa Bình","districts":{"397":"Huyện Cao Phong","398":"Huyện Đà Bắc","399":"Huyện Kim Bôi","400":"Huyện Kỳ Sơn","401":"Huyện Lạc Sơn","402":"Huyện Lạc Thủy","403":"Huyện Lương Sơn","404":"Huyện Mai Châu","405":"Huyện Tân Lạc","406":"Huyện Yên Thủy","407":"Thành phố Hòa Bình"}},"31":{"name":"Tỉnh Hưng Yên","districts":{"408":"Huyện Ân Thi","409":"Huyện Khoái Châu","410":"Huyện Kim Động","411":"Huyện Mỹ Hào","412":"Huyện Phù Cừ","413":"Huyện Tiên Lữ","414":"Huyện Văn Giang","415":"Huyện Văn Lâm","416":"Huyện Yên Mỹ","417":"Thành phố Hưng Yên"}},"32":{"name":"Tỉnh Khánh Hòa","districts":{"418":"Huyện Cam Lâm","419":"Huyện Diên Khánh","420":"Huyện Khánh Sơn","421":"Huyện Khánh Vĩnh","422":"Huyện Ninh Hòa","423":"Huyện Trường Sa","424":"Huyện Vạn Ninh","425":"Thành phố Nha Trang","426":"Thị xã Cam Ranh"}},"33":{"name":"Tỉnh Kiên Giang","districts":{"427":"Huyện An Biên","428":"Huyện An Minh","429":"Huyện Châu Thành","430":"Huyện Giang Thành","431":"Huyện Giồng Riềng","432":"Huyện Gò Quao","433":"Huyện Hòn Đất","434":"Huyện Kiên Hải","435":"Huyện Kiên Lương","436":"Huyện Phú Quốc","437":"Huyện Tân Hiệp","438":"Huyện U Minh Thượng","439":"Huyện Vĩnh Thuận","440":"Thành phố Rạch Giá","441":"Thị xã Hà Tiên"}},"34":{"name":"Tỉnh Kon Tum","districts":{"442":"Huyện Đắk Glei","443":"Huyện Đắk Hà","444":"Huyện Đắk Tô","445":"Huyện Kon Plông","446":"Huyện Kon Rẫy","447":"Huyện Ngọc Hồi","448":"Huyện Sa Thầy","449":"Huyện Tu Mơ Rông","450":"Thành phố Kon Tum"}},"35":{"name":"Tỉnh Lai Châu","districts":{"451":"Huyện Mường Tè","452":"Huyện Phong Thổ","453":"Huyện Sìn Hồ","454":"Huyện Tam Đường","455":"Huyện Tân Uyên","456":"Huyện Than Uyên","457":"Thị xã Lai Châu"}},"36":{"name":"Tỉnh Lâm Đồng","districts":{"458":"Huyện Bảo Lâm","459":"Huyện Cát Tiên","460":"Huyện Đạ Huoai","461":"Huyện Đạ Tẻh","462":"Huyện Đam Rông","463":"Huyện Di Linh","464":"Huyện Đơn Dương","465":"Huyện Đức Trọng","466":"Huyện Lạc Dương","467":"Huyện Lâm Hà","468":"Thành phố Bảo Lộc","469":"Thành phố Đà Lạt"}},"37":{"name":"Tỉnh Lạng Sơn","districts":{"470":"Huyện Bắc Sơn","471":"Huyện Bình Gia","472":"Huyện Cao Lộc","473":"Huyện Chi Lăng","474":"Huyện Đình Lập","475":"Huyện Hữu Lũng","476":"Huyện Lộc Bình","477":"Huyện Tràng Định","478":"Huyện Văn Lãng","479":"Huyện Văn Quan","480":"Thành phố Lạng Sơn"}},"38":{"name":"Tỉnh Lào Cai","districts":{"481":"Huyện Bắc Hà","482":"Huyện Bảo Thắng","483":"Huyện Bảo Yên","484":"Huyện Bát Xát","485":"Huyện Mường Khương","486":"Huyện Sa Pa","487":"Huyện Si Ma Cai","488":"Huyện Văn Bàn","489":"Thành phố Lào Cai"}},"39":{"name":"Tỉnh Long An","districts":{"490":"Huyện Bến Lức","491":"Huyện Cần Đước","492":"Huyện Cần Giuộc","493":"Huyện Châu Thành","494":"Huyện Đức Hòa","495":"Huyện Đức Huệ","496":"Huyện Mộc Hóa","497":"Huyện Tân Hưng","498":"Huyện Tân Thạnh","499":"Huyện Tân Trụ","500":"Huyện Thạnh Hóa","501":"Huyện Thủ Thừa","502":"Huyện Vĩnh Hưng","503":"Thành phố Tân An"}},"40":{"name":"Tỉnh Nam Định","districts":{"504":"Huyện Giao Thủy","505":"Huyện Hải Hậu","506":"Huyện Mỹ Lộc","507":"Huyện Nam Trực","508":"Huyện Nghĩa Hưng","509":"Huyện Trực Ninh","510":"Huyện Vụ Bản","511":"Huyện Xuân Trường","512":"Huyện ý Yên","513":"Thành phố Nam Định"}},"41":{"name":"Tỉnh Nghệ An","districts":{"514":"Huyện Anh Sơn","515":"Huyện Con Cuông","516":"Huyện Diễn Châu","517":"Huyện Đô Lương","518":"Huyện Hưng Nguyên","519":"Huyện Kỳ Sơn","520":"Huyện Nam Đàn","521":"Huyện Nghi Lộc","522":"Huyện Nghĩa Đàn","523":"Huyện Quế Phong","524":"Huyện Quỳ Châu","525":"Huyện Quỳ Hợp","526":"Huyện Quỳnh Lưu","527":"Huyện Tân Kỳ","528":"Huyện Thanh Chương","529":"Huyện Tương Dương","530":"Huyện Yên Thành","531":"Thành phố Vinh","532":"Thị xã Cửa Lò","533":"Thị xã Thái Hòa"}},"42":{"name":"Tỉnh Ninh Bình","districts":{"534":"Huyện Gia Viễn","535":"Huyện Hoa Lư","536":"Huyện Kim Sơn","537":"Huyện Nho Quan","538":"Huyện Yên Khánh","539":"Huyện Yên Mô","540":"Thành phố Ninh Bình","541":"Thị xã Tam Điệp"}},"43":{"name":"Tỉnh Ninh Thuận","districts":{"542":"Huyên Bác ái","543":"Huyện Ninh Hải","544":"Huyện Ninh Phước","545":"Huyện Ninh Sơn","546":"Huyện Thuận Bắc","547":"Huyện Thuận Nam","548":"Thành phố Phan Rang-Tháp Chàm"}},"44":{"name":"Tỉnh Phú Thọ","districts":{"549":"Huyện Cẩm Khê","550":"Huyện Đoan Hùng","551":"Huyện Hạ Hòa","552":"Huyện Lâm Thao","553":"Huyện Phù Ninh","554":"Huyện Tam Nông","555":"Huyện Tân Sơn","556":"Huyện Thanh Ba","557":"Huyện Thanh Sơn","558":"Huyện Thanh Thủy","559":"Huyện Yên Lập","560":"Thành phố Việt Trì","561":"Thị xã Phú Thọ"}},"45":{"name":"Tỉnh Phú Yên","districts":{"562":"Huyện Đông Hòa","563":"Huyện Đồng Xuân","564":"Huyện Phú Hòa","565":"Huyện Sơn Hòa","566":"Huyện Sông Hinh","567":"Huyện Tây Hòa","568":"Huyện Tuy An","569":"Thành phố Tuy Hòa","570":"Thị xã Sông Cầu"}},"46":{"name":"Tỉnh Quảng Bình","districts":{"571":"Huyện Bố Trạch","572":"Huyện Lệ Thủy","573":"Huyện MinhHoá","574":"Huyện Quảng Ninh","575":"Huyện Quảng Trạch","576":"Huyện Tuyên Hoá","577":"Thành phố Đồng Hới"}},"47":{"name":"Tỉnh Quảng Nam","districts":{"578":"Huyện Bắc Trà My","579":"Huyện Đại Lộc","580":"Huyện Điện Bàn","581":"Huyện Đông Giang","582":"Huyện Duy Xuyên","583":"Huyện Hiệp Đức","584":"Huyện Nam Giang","585":"Huyện Nam Trà My","586":"Huyện Nông Sơn","587":"Huyện Núi Thành","588":"Huyện Phú Ninh","589":"Huyện Phước Sơn","590":"Huyện Quế Sơn","591":"Huyện Tây Giang","592":"Huyện Thăng Bình","593":"Huyện Tiên Phước","594":"Thành phố Hội An","595":"Thành phố Tam Kỳ"}},"48":{"name":"Tỉnh Quảng Ngãi","districts":{"596":"Huyện Ba Tơ","597":"Huyện Bình Sơn","598":"Huyện Đức Phổ","599":"Huyện Lý sơn","600":"Huyện Minh Long","601":"Huyện Mộ Đức","602":"Huyện Nghĩa Hành","603":"Huyện Sơn Hà","604":"Huyện Sơn Tây","605":"Huyện Sơn Tịnh","606":"Huyện Tây Trà","607":"Huyện Trà Bồng","608":"Huyện Tư Nghĩa","609":"Thành phố Quảng Ngãi"}},"49":{"name":"Tỉnh Quảng Ninh","districts":{"610":"Huyện Ba Chẽ","611":"Huyện Bình Liêu","612":"Huyện Cô Tô","613":"Huyện Đầm Hà","614":"Huyện Đông Triều","615":"Huyện Hải Hà","616":"Huyện Hoành Bồ","617":"Huyện Tiên Yên","618":"Huyện Vân Đồn","619":"Huyện Yên Hưng","620":"Thành phố Hạ Long","621":"Thành phố Móng Cái","622":"Thị xã Cẩm Phả","623":"Thị xã Uông Bí"}},"50":{"name":"Tỉnh Quảng Trị","districts":{"624":"Huyện Cam Lộ","625":"Huyện Cồn Cỏ","626":"Huyện Đa Krông","627":"Huyện Gio Linh","628":"Huyện Hải Lăng","629":"Huyện Hướng Hóa","630":"Huyện Triệu Phong","631":"Huyện Vính Linh","632":"Thành phố Đông Hà","633":"Thị xã Quảng Trị"}},"51":{"name":"Tỉnh Sóc Trăng","districts":{"634":"Huyện Châu Thành","635":"Huyện Cù Lao Dung","636":"Huyện Kế Sách","637":"Huyện Long Phú","638":"Huyện Mỹ Tú","639":"Huyện Mỹ Xuyên","640":"Huyện Ngã Năm","641":"Huyện Thạnh Trị","642":"Huyện Trần Đề","643":"Huyện Vĩnh Châu","644":"Thành phố Sóc Trăng"}},"52":{"name":"Tỉnh Sơn La","districts":{"645":"Huyện Bắc Yên","646":"Huyện Mai Sơn","647":"Huyện Mộc Châu","648":"Huyện Mường La","649":"Huyện Phù Yên","650":"Huyện Quỳnh Nhai","651":"Huyện Sông Mã","652":"Huyện Sốp Cộp","653":"Huyện Thuận Châu","654":"Huyện Yên Châu","655":"Thành phố Sơn La"}},"53":{"name":"Tỉnh Tây Ninh","districts":{"656":"Huyện Bến Cầu","657":"Huyện Châu Thành","658":"Huyện Dương Minh Châu","659":"Huyện Gò Dầu","660":"Huyện Hòa Thành","661":"Huyện Tân Biên","662":"Huyện Tân Châu","663":"Huyện Trảng Bàng","664":"Thị xã Tây Ninh"}},"54":{"name":"Tỉnh Thái Bình","districts":{"665":"Huyện Đông Hưng","666":"Huyện Hưng Hà","667":"Huyện Kiến Xương","668":"Huyện Quỳnh Phụ","669":"Huyện Thái Thụy","670":"Huyện Tiền Hải","671":"Huyện Vũ Thư","672":"Thành phố Thái Bình"}},"55":{"name":"Tỉnh Thái Nguyên","districts":{"673":"Huyện Đại Từ","674":"Huyện Định Hóa","675":"Huyện Đồng Hỷ","676":"Huyện Phổ Yên","677":"Huyện Phú Bình","678":"Huyện Phú Lương","679":"Huyện Võ Nhai","680":"Thành phố Thái Nguyên","681":"Thị xã Sông Công"}},"56":{"name":"Tỉnh Thanh Hóa","districts":{"682":"Huyện Bá Thước","683":"Huyện Cẩm Thủy","684":"Huyện Đông Sơn","685":"Huyện Hà Trung","686":"Huyện Hậu Lộc","687":"Huyện Hoằng Hóa","688":"Huyện Lang Chánh","689":"Huyện Mường Lát","690":"Huyện Nga Sơn","691":"Huyện Ngọc Lặc","692":"Huyện Như Thanh","693":"Huyện Như Xuân","694":"Huyện Nông Cống","695":"Huyện Quan Hóa","696":"Huyện Quan Sơn","697":"Huyện Quảng Xương","698":"Huyện Thạch Thành","699":"Huyện Thiệu Hóa","700":"Huyện Thọ Xuân","701":"Huyện Thường Xuân","702":"Huyện Tĩnh Gia","703":"Huyện Triệu Sơn","704":"Huyện Vĩnh Lộc","705":"Huyện Yên Định","706":"Thành phố Thanh Hóa","707":"Thị xã Bỉm Sơn","708":"Thị xã Sầm Sơn"}},"57":{"name":"Tỉnh Thừa Thiên Huế","districts":{"709":"Huyện A Lưới","710":"Huyện Hương Trà","711":"Huyện Nam Dông","712":"Huyện Phong Điền","713":"Huyện Phú Lộc","714":"Huyện Phú Vang","715":"Huyện Quảng Điền","716":"Thành phố Huế","717":"thị xã Hương Thủy"}},"58":{"name":"Tỉnh Tiền Giang","districts":{"718":"Huyện Cái Bè","719":"Huyện Cai Lậy","720":"Huyện Châu Thành","721":"Huyện Chợ Gạo","722":"Huyện Gò Công Đông","723":"Huyện Gò Công Tây","724":"Huyện Tân Phú Đông","725":"Huyện Tân Phước","726":"Thành phố Mỹ Tho","727":"Thị xã Gò Công"}},"59":{"name":"Tỉnh Trà Vinh","districts":{"728":"Huyện Càng Long","729":"Huyện Cầu Kè","730":"Huyện Cầu Ngang","731":"Huyện Châu Thành","732":"Huyện Duyên Hải","733":"Huyện Tiểu Cần","734":"Huyện Trà Cú","735":"Thành phố Trà Vinh"}},"60":{"name":"Tỉnh Tuyên Quang","districts":{"736":"Huyện Chiêm Hóa","737":"Huyện Hàm Yên","738":"Huyện Na hang","739":"Huyện Sơn Dương","740":"Huyện Yên Sơn","741":"Thành phố Tuyên Quang"}},"61":{"name":"Tỉnh Vĩnh Long","districts":{"742":"Huyện Bình Minh","743":"Huyện Bình Tân","744":"Huyện Long Hồ","745":"Huyện Mang Thít","746":"Huyện Tam Bình","747":"Huyện Trà Ôn","748":"Huyện Vũng Liêm","749":"Thành phố Vĩnh Long"}},"62":{"name":"Tỉnh Vĩnh Phúc","districts":{"750":"Huyện Bình Xuyên","751":"Huyện Lập Thạch","752":"Huyện Sông Lô","753":"Huyện Tam Đảo","754":"Huyện Tam Dương","755":"Huyện Vĩnh Tường","756":"Huyện Yên Lạc","757":"Thành phố Vĩnh Yên","758":"Thị xã Phúc Yên"}},"63":{"name":"Tỉnh Yên Bái","districts":{"759":"Huyện Lục Yên","760":"Huyện Mù Cang Chải","761":"Huyện Trạm Tấu","762":"Huyện Trấn Yên","763":"Huyện Văn Chấn","764":"Huyện Văn Yên","765":"Huyện Yên Bình","766":"Thành phố Yên Bái","767":"Thị xã Nghĩa Lộ"}}}

            var html='';
            for(var key in huyen)
            {
                if(data.state_province == huyen[key][['name']])
                {
                    html += '<option>Chọn quận huyện</option>'
                    for(var keys in huyen[key]['districts'])
                    {
                        if(data.wards == huyen[key]['districts'][keys])
                        {
                            html += '<option selected>'+huyen[key]['districts'][keys]+'</option>'
                        }
                        else
                        {
                            html += '<option>'+huyen[key]['districts'][keys]+'</option>'
                        }
                    }
                }

            }
            $('select[name="ship_wards"]').html(html)
            break;

        }
        else
        {
            $('select[name="ship_state_province"]').val('null').trigger('change.select2');
            $('select[name="ship_wards"]').html('')

        }
        $('select[name="ship_state_province"]').change(function () {
            var value = $(this).val();
            var data = {"1":{"name":"Thành phố Cần Thơ","districts":{"66":"Huyện Cờ Đỏ","67":"Huyện Phong Điền","68":"Huyện Thới Lai","69":"Huyện Vĩnh Thạnh","70":"Quận Bình Thủy","71":"Quận Cái Răng","72":"Quận Ninh Kiều","73":"Quận Ô Môn","74":"Quận Thốt Nốt"}},"2":{"name":"Thành phố Đà Nẵng","districts":{"76":"Huyện Hòa Vang","77":"Huyện Hoàng Sa","78":"Quận Cẩm Lệ","79":"Quận Hải Châu","80":"Quận Liên Chiểu","81":"Quận Ngũ Hành Sơn","82":"Quận Sơn Trà","83":"Quận Thanh Khê"}},"3":{"name":"Thành phố Hà Nội","districts":{"85":"Huyện Ba Vì","86":"Huyện Chương Mỹ","87":"Huyện Đan Phượng","88":"Huyện Đông Anh","89":"Huyện Gia Lâm","90":"Huyện Hoài Đức","91":"Huyện Mê Linh","92":"Huyện Mỹ Đức","93":"Huyện Phú Xuyên","94":"Huyện Phúc Thọ","95":"Huyện Quốc Oai","96":"Huyện Sóc Sơn","97":"Huyện Thạch Thất","98":"Huyện Thanh Oai","99":"Huyện Thanh Trì","100":"Huyện Thường Tín","101":"Huyện Từ Liêm","102":"Huyện ứng Hòa","103":"Quận Ba Đình","104":"Quận Cầu Giấy","105":"Quận Đống Đa","106":"Quận Hà Đông","107":"Quận Hai Bà Trưng","108":"Quận Hoàn Kiếm","109":"Quận Hoàng Mai","110":"Quận Long Biên","111":"Quận Tây Hồ","112":"Quận Thanh Xuân","113":"Thị xã Sơn Tây"}},"4":{"name":"Thành phố Hải Phòng","districts":{"115":"Huyện An Dương","116":"Huyện An Lão","117":"Huyện Bạch Long Vĩ","118":"Huyện Cát Hải","119":"Huyện Kiến Thụy","120":"Huyện Thủy Nguyên","121":"Huyện Tiên Lãng","122":"Huyện Vĩnh Bảo","123":"Quận Đồ Sơn","124":"Quận Dương Kinh","125":"Quận Hải An","126":"Quận Hồng Bàng","127":"Quận Kiến An","128":"Quận Lê Chân","129":"Quận Ngô Quyền"}},"5":{"name":"Thành phố Hồ Chí Minh","districts":{"131":"Huyện Bình Chánh","132":"Huyện Cần Giờ","133":"Huyện Củ Chi","134":"Huyện Hóc Môn","135":"Huyện Nhà Bè","136":"Quận 1","137":"Quận 10","138":"Quận 11","139":"Quận 12","140":"Quận 2","141":"Quận 3","142":"Quận 4","143":"Quận 5","144":"Quận 6","145":"Quận 7","146":"Quận 8","147":"Quận 9","148":"Quận Bình Tân","149":"Quận Bình Thạnh","150":"Quận Gò Vấp","151":"Quận Phú Nhuận","152":"Quận Tân Bình","153":"Quận Tân Phú","154":"Quận Thủ Đức"}},"6":{"name":"Tỉnh An Giang","districts":{"155":"Huyện An Phú","156":"Huyện Châu Phú","157":"Huyện Châu Thành","158":"Huyện Chợ Mới","159":"Huyện Phú Tân","160":"Huyện Thoại Sơn","161":"Huyện Tịnh Biên","162":"Huyện Tri Tôn","163":"Thành phố Long Xuyên","164":"Thị xã Châu Đốc","165":"Thị xã Tân Châu"}},"7":{"name":"Tỉnh Bà Rịa-Vũng Tàu","districts":{"166":"Huyện Châu Đức","167":"Huyện Côn Đảo","168":"Huyện Đất Đỏ","169":"Huyện Long Điền","170":"Huyện Tân Thành","171":"Huyện Xuyên Mộc","172":"Thành phố Vũng Tàu","173":"Thị xã Bà Rịa"}},"8":{"name":"Tỉnh Bắc Giang","districts":{"174":"Huyện Hiệp Hòa","175":"Huyện Lạng Giang","176":"Huyện Lục Nam","177":"Huyện Lục Ngạn","178":"Huyện Sơn Động","179":"Huyện Tân Yên","180":"Huyện Việt Yên","181":"Huyện Yên Dũng","182":"Huyện Yên Thế","183":"Thành phố Bắc Giang"}},"9":{"name":"Tỉnh Bắc Kạn","districts":{"184":"Huyện Ba Bể","185":"Huyện Bạch Thông","186":"Huyện Chợ Đồn","187":"Huyện Chợ Mới","188":"Huyện Na Rì","189":"Huyện Ngân Sơn","190":"Huyện Pác Nặm","191":"Thị xã Bắc Kạn"}},"10":{"name":"Tỉnh Bạc Liêu","districts":{"192":"Huyện Đông Hải","193":"Huyện Giá Rai","194":"Huyện Hòa Bình","195":"Huyện Hồng Dân","196":"Huyện Phước Long","197":"Huyện Vĩnh Lợi","198":"Thành Phố Bạc Liêu"}},"11":{"name":"Tỉnh Bắc Ninh","districts":{"199":"Huyện Gia Bình","200":"Huyện Lương Tài","201":"Huyện Quế Võ","202":"Huyện Thuận Thành","203":"Huyện Tiên Du","204":"Huyện Yên Phong","205":"Thành phố Bắc Ninh","206":"Thị xã Từ Sơn"}},"12":{"name":"Tỉnh Bến Tre","districts":{"207":"Huyện Ba Tri","208":"Huyện Bình Đại","209":"Huyện Châu Thành","210":"Huyện Chợ Lách","211":"Huyện Giồng Trôm","212":"Huyện Mỏ Cày Bắc","213":"Huyện Mỏ Cày Nam","214":"Huyện Thạnh Phú","215":"Thành phố Bến Tre"}},"13":{"name":"Tỉnh Bình Định","districts":{"216":"Huyện An Lão","217":"Huyện An Nhơn","218":"Huyện Hoài  Ân","219":"Huyện Hoài Nhơn","220":"Huyện Phù Mỹ","221":"Huyện Phù cát","222":"Huyện Tây Sơn","223":"Huyện Tuy Phước","224":"Huyện Vân Canh","225":"Huyện Vĩnh Thạnh","226":"Thành phố Quy Nhơn"}},"14":{"name":"Tỉnh Bình Dương","districts":{"227":"Huyện Bến Cát","228":"Huyện Dầu Tiếng","229":"Huyện Dĩ An","230":"Huyện Phú Giáo","231":"Huyện Tân Uyên","232":"Huyện Thuận An","233":"Thị xã Thủ Dầu Một"}},"15":{"name":"Tỉnh Bình Phước","districts":{"234":"Huyện Bù Đăng","235":"Huyện Bù Đốp","236":"Huyện Bù Gia Mập","237":"Huyện Chơn Thành","238":"Huyện Đồng Phú","239":"Huyện Hớn Quản","240":"Huyện Lộc Ninh","241":"Thị xã Bình Long","242":"Thị xã Đồng Xoài","243":"Thị xã Phước Long"}},"16":{"name":"Tỉnh Bình Thuận","districts":{"244":"Huyện  Đức Linh","245":"Huyện Bắc Bình","246":"Huyện Hàm Tân","247":"Huyện Hàm Thuận Bắc","248":"Huyện Hàm Thuận Nam","249":"Huyện Phú Qúi","250":"Huyện Tánh Linh","251":"Huyện Tuy Phong","252":"Thành phố Phan Thiết","253":"Thị xã La Gi"}},"17":{"name":"Tỉnh Cà Mau","districts":{"254":"Huyện Cái Nước","255":"Huyện Đầm Dơi","256":"Huyện Năm Căn","257":"Huyện Ngọc Hiển","258":"Huyện Phú Tân","259":"Huyện Thới Bình","260":"Huyện Trần Văn Thời","261":"Huyện U Minh","262":"Thành phố Cà Mau"}},"18":{"name":"Tỉnh Cao Bằng","districts":{"263":"Huyện Bảo Lạc","264":"Huyện Bảo Lâm","265":"Huyện Hạ Lang","266":"Huyện Hà Quảng","267":"Huyện Hòa An","268":"Huyện Nguyên Bình","269":"Huyện Phục Hòa","270":"Huyện Quảng Uyên","271":"Huyện Thạch An","272":"Huyện Thông Nông","273":"Huyện Trà Lĩnh","274":"Huyện Trùng Khánh","275":"Thị xã Cao Bằng"}},"19":{"name":"Tỉnh Đắk Lắk","districts":{"276":"Huyện Buôn Đôn","277":"Huyện Cư Kuin","278":"Huyện Cư MGar","279":"Huyện Ea Kar","280":"Huyện Ea Súp","281":"Huyện EaHLeo","282":"Huyện Krông Ana","283":"Huyện Krông Bông","284":"Huyện Krông Búk","285":"Huyện Krông Năng","286":"Huyện Krông Pắc","287":"Huyện Lắk","288":"Huyện MDrắk","289":"Thành phố Buôn Ma Thuột","290":"Thị xã Buôn Hồ"}},"20":{"name":"Tỉnh Đắk Nông","districts":{"291":"Huyện Cư Jút","292":"Huyện Đắk GLong","293":"Huyện Đắk Mil","294":"Huyện Đắk RLấp","295":"Huyện Đắk Song","296":"Huyện KRông Nô","297":"Huyện Tuy Đức","298":"Thị xã Gia Nghĩa"}},"21":{"name":"Tỉnh Điện Biên","districts":{"299":"Huyện Điện Biên","300":"Huyện Điện Biên Đông","301":"Huyện Mường Chà","302":"Huyện Mương Nhé","303":"Huyện Mường ảng","304":"Huyện Tủa Chùa","305":"Huyện Tuần Giáo","306":"Thành phố Điện Biên phủ","307":"Thị xã Mường Lay"}},"22":{"name":"Tỉnh Đồng Nai","districts":{"308":"Huyện Cẩm Mỹ","309":"Huyện Định Quán","310":"Huyện Long Thành","311":"Huyện Nhơn Trạch","312":"Huyện Tân Phú","313":"Huyện Thống Nhất","314":"Huyện Trảng Bom","315":"Huyện Vĩnh Cửu","316":"Huyện Xuân Lộc","317":"Thành phố Biên Hòa","318":"Thị xã Long Khánh"}},"23":{"name":"Tỉnh Đồng Tháp","districts":{"319":"Huyện Cao Lãnh","320":"Huyện Châu Thành","321":"Huyện Hồng Ngự","322":"Huyện Lai Vung","323":"Huyện Lấp Vò","324":"Huyện Tam Nông","325":"Huyện Tân Hồng","326":"Huyện Thanh Bình","327":"Huyện Tháp Mười","328":"Thành phố Cao Lãnh","329":"Thị xã Hồng Ngự","330":"Thị xã Sa Đéc"}},"24":{"name":"Tỉnh Gia Lai","districts":{"331":"Huyện Chư Păh","332":"Huyện Chư Pưh","333":"Huyện Chư Sê","334":"Huyện ChưPRông","335":"Huyện Đăk Đoa","336":"Huyện Đăk Pơ","337":"Huyện Đức Cơ","338":"Huyện Ia Grai","339":"Huyện Ia Pa","340":"Huyện KBang","341":"Huyện KBang","342":"Huyện Kông Chro","343":"Huyện Krông Pa","344":"Huyện Mang Yang","345":"Huyện Phú Thiện","346":"Thành phố Plei Ku","347":"Thị xã AYun Pa","348":"Thị xã An Khê"}},"25":{"name":"Tỉnh Hà Giang","districts":{"349":"Huyện Bắc Mê","350":"Huyện Bắc Quang","351":"Huyện Đồng Văn","352":"Huyện Hoàng Su Phì","353":"Huyện Mèo Vạc","354":"Huyện Quản Bạ","355":"Huyện Quang Bình","356":"Huyện Vị Xuyên","357":"Huyện Xín Mần","358":"Huyện Yên Minh","359":"Thành Phố Hà Giang"}},"26":{"name":"Tỉnh Hà Nam","districts":{"360":"Huyện Bình Lục","361":"Huyện Duy Tiên","362":"Huyện Kim Bảng","363":"Huyện Lý Nhân","364":"Huyện Thanh Liêm","365":"Thành phố Phủ Lý"}},"27":{"name":"Tỉnh Hà Tĩnh","districts":{"366":"Huyện Cẩm Xuyên","367":"Huyện Can Lộc","368":"Huyện Đức Thọ","369":"Huyện Hương Khê","370":"Huyện Hương Sơn","371":"Huyện Kỳ Anh","372":"Huyện Lộc Hà","373":"Huyện Nghi Xuân","374":"Huyện Thạch Hà","375":"Huyện Vũ Quang","376":"Thành phố Hà Tĩnh","377":"Thị xã Hồng Lĩnh"}},"28":{"name":"Tỉnh Hải Dương","districts":{"378":"Huyện Bình Giang","379":"Huyện Cẩm Giàng","380":"Huyện Gia Lộc","381":"Huyện Kim Thành","382":"Huyện Kinh Môn","383":"Huyện Nam Sách","384":"Huyện Ninh Giang","385":"Huyện Thanh Hà","386":"Huyện Thanh Miện","387":"Huyện Tứ Kỳ","388":"Thành phố Hải Dương","389":"Thị xã Chí Linh"}},"29":{"name":"Tỉnh Hậu Giang","districts":{"390":"Huyện Châu Thành","391":"Huyện Châu Thành A","392":"Huyện Long Mỹ","393":"Huyện Phụng Hiệp","394":"Huyện Vị Thủy","395":"Thành Phố Vị Thanh","396":"Thị xã Ngã Bảy"}},"30":{"name":"Tỉnh Hòa Bình","districts":{"397":"Huyện Cao Phong","398":"Huyện Đà Bắc","399":"Huyện Kim Bôi","400":"Huyện Kỳ Sơn","401":"Huyện Lạc Sơn","402":"Huyện Lạc Thủy","403":"Huyện Lương Sơn","404":"Huyện Mai Châu","405":"Huyện Tân Lạc","406":"Huyện Yên Thủy","407":"Thành phố Hòa Bình"}},"31":{"name":"Tỉnh Hưng Yên","districts":{"408":"Huyện Ân Thi","409":"Huyện Khoái Châu","410":"Huyện Kim Động","411":"Huyện Mỹ Hào","412":"Huyện Phù Cừ","413":"Huyện Tiên Lữ","414":"Huyện Văn Giang","415":"Huyện Văn Lâm","416":"Huyện Yên Mỹ","417":"Thành phố Hưng Yên"}},"32":{"name":"Tỉnh Khánh Hòa","districts":{"418":"Huyện Cam Lâm","419":"Huyện Diên Khánh","420":"Huyện Khánh Sơn","421":"Huyện Khánh Vĩnh","422":"Huyện Ninh Hòa","423":"Huyện Trường Sa","424":"Huyện Vạn Ninh","425":"Thành phố Nha Trang","426":"Thị xã Cam Ranh"}},"33":{"name":"Tỉnh Kiên Giang","districts":{"427":"Huyện An Biên","428":"Huyện An Minh","429":"Huyện Châu Thành","430":"Huyện Giang Thành","431":"Huyện Giồng Riềng","432":"Huyện Gò Quao","433":"Huyện Hòn Đất","434":"Huyện Kiên Hải","435":"Huyện Kiên Lương","436":"Huyện Phú Quốc","437":"Huyện Tân Hiệp","438":"Huyện U Minh Thượng","439":"Huyện Vĩnh Thuận","440":"Thành phố Rạch Giá","441":"Thị xã Hà Tiên"}},"34":{"name":"Tỉnh Kon Tum","districts":{"442":"Huyện Đắk Glei","443":"Huyện Đắk Hà","444":"Huyện Đắk Tô","445":"Huyện Kon Plông","446":"Huyện Kon Rẫy","447":"Huyện Ngọc Hồi","448":"Huyện Sa Thầy","449":"Huyện Tu Mơ Rông","450":"Thành phố Kon Tum"}},"35":{"name":"Tỉnh Lai Châu","districts":{"451":"Huyện Mường Tè","452":"Huyện Phong Thổ","453":"Huyện Sìn Hồ","454":"Huyện Tam Đường","455":"Huyện Tân Uyên","456":"Huyện Than Uyên","457":"Thị xã Lai Châu"}},"36":{"name":"Tỉnh Lâm Đồng","districts":{"458":"Huyện Bảo Lâm","459":"Huyện Cát Tiên","460":"Huyện Đạ Huoai","461":"Huyện Đạ Tẻh","462":"Huyện Đam Rông","463":"Huyện Di Linh","464":"Huyện Đơn Dương","465":"Huyện Đức Trọng","466":"Huyện Lạc Dương","467":"Huyện Lâm Hà","468":"Thành phố Bảo Lộc","469":"Thành phố Đà Lạt"}},"37":{"name":"Tỉnh Lạng Sơn","districts":{"470":"Huyện Bắc Sơn","471":"Huyện Bình Gia","472":"Huyện Cao Lộc","473":"Huyện Chi Lăng","474":"Huyện Đình Lập","475":"Huyện Hữu Lũng","476":"Huyện Lộc Bình","477":"Huyện Tràng Định","478":"Huyện Văn Lãng","479":"Huyện Văn Quan","480":"Thành phố Lạng Sơn"}},"38":{"name":"Tỉnh Lào Cai","districts":{"481":"Huyện Bắc Hà","482":"Huyện Bảo Thắng","483":"Huyện Bảo Yên","484":"Huyện Bát Xát","485":"Huyện Mường Khương","486":"Huyện Sa Pa","487":"Huyện Si Ma Cai","488":"Huyện Văn Bàn","489":"Thành phố Lào Cai"}},"39":{"name":"Tỉnh Long An","districts":{"490":"Huyện Bến Lức","491":"Huyện Cần Đước","492":"Huyện Cần Giuộc","493":"Huyện Châu Thành","494":"Huyện Đức Hòa","495":"Huyện Đức Huệ","496":"Huyện Mộc Hóa","497":"Huyện Tân Hưng","498":"Huyện Tân Thạnh","499":"Huyện Tân Trụ","500":"Huyện Thạnh Hóa","501":"Huyện Thủ Thừa","502":"Huyện Vĩnh Hưng","503":"Thành phố Tân An"}},"40":{"name":"Tỉnh Nam Định","districts":{"504":"Huyện Giao Thủy","505":"Huyện Hải Hậu","506":"Huyện Mỹ Lộc","507":"Huyện Nam Trực","508":"Huyện Nghĩa Hưng","509":"Huyện Trực Ninh","510":"Huyện Vụ Bản","511":"Huyện Xuân Trường","512":"Huyện ý Yên","513":"Thành phố Nam Định"}},"41":{"name":"Tỉnh Nghệ An","districts":{"514":"Huyện Anh Sơn","515":"Huyện Con Cuông","516":"Huyện Diễn Châu","517":"Huyện Đô Lương","518":"Huyện Hưng Nguyên","519":"Huyện Kỳ Sơn","520":"Huyện Nam Đàn","521":"Huyện Nghi Lộc","522":"Huyện Nghĩa Đàn","523":"Huyện Quế Phong","524":"Huyện Quỳ Châu","525":"Huyện Quỳ Hợp","526":"Huyện Quỳnh Lưu","527":"Huyện Tân Kỳ","528":"Huyện Thanh Chương","529":"Huyện Tương Dương","530":"Huyện Yên Thành","531":"Thành phố Vinh","532":"Thị xã Cửa Lò","533":"Thị xã Thái Hòa"}},"42":{"name":"Tỉnh Ninh Bình","districts":{"534":"Huyện Gia Viễn","535":"Huyện Hoa Lư","536":"Huyện Kim Sơn","537":"Huyện Nho Quan","538":"Huyện Yên Khánh","539":"Huyện Yên Mô","540":"Thành phố Ninh Bình","541":"Thị xã Tam Điệp"}},"43":{"name":"Tỉnh Ninh Thuận","districts":{"542":"Huyên Bác ái","543":"Huyện Ninh Hải","544":"Huyện Ninh Phước","545":"Huyện Ninh Sơn","546":"Huyện Thuận Bắc","547":"Huyện Thuận Nam","548":"Thành phố Phan Rang-Tháp Chàm"}},"44":{"name":"Tỉnh Phú Thọ","districts":{"549":"Huyện Cẩm Khê","550":"Huyện Đoan Hùng","551":"Huyện Hạ Hòa","552":"Huyện Lâm Thao","553":"Huyện Phù Ninh","554":"Huyện Tam Nông","555":"Huyện Tân Sơn","556":"Huyện Thanh Ba","557":"Huyện Thanh Sơn","558":"Huyện Thanh Thủy","559":"Huyện Yên Lập","560":"Thành phố Việt Trì","561":"Thị xã Phú Thọ"}},"45":{"name":"Tỉnh Phú Yên","districts":{"562":"Huyện Đông Hòa","563":"Huyện Đồng Xuân","564":"Huyện Phú Hòa","565":"Huyện Sơn Hòa","566":"Huyện Sông Hinh","567":"Huyện Tây Hòa","568":"Huyện Tuy An","569":"Thành phố Tuy Hòa","570":"Thị xã Sông Cầu"}},"46":{"name":"Tỉnh Quảng Bình","districts":{"571":"Huyện Bố Trạch","572":"Huyện Lệ Thủy","573":"Huyện MinhHoá","574":"Huyện Quảng Ninh","575":"Huyện Quảng Trạch","576":"Huyện Tuyên Hoá","577":"Thành phố Đồng Hới"}},"47":{"name":"Tỉnh Quảng Nam","districts":{"578":"Huyện Bắc Trà My","579":"Huyện Đại Lộc","580":"Huyện Điện Bàn","581":"Huyện Đông Giang","582":"Huyện Duy Xuyên","583":"Huyện Hiệp Đức","584":"Huyện Nam Giang","585":"Huyện Nam Trà My","586":"Huyện Nông Sơn","587":"Huyện Núi Thành","588":"Huyện Phú Ninh","589":"Huyện Phước Sơn","590":"Huyện Quế Sơn","591":"Huyện Tây Giang","592":"Huyện Thăng Bình","593":"Huyện Tiên Phước","594":"Thành phố Hội An","595":"Thành phố Tam Kỳ"}},"48":{"name":"Tỉnh Quảng Ngãi","districts":{"596":"Huyện Ba Tơ","597":"Huyện Bình Sơn","598":"Huyện Đức Phổ","599":"Huyện Lý sơn","600":"Huyện Minh Long","601":"Huyện Mộ Đức","602":"Huyện Nghĩa Hành","603":"Huyện Sơn Hà","604":"Huyện Sơn Tây","605":"Huyện Sơn Tịnh","606":"Huyện Tây Trà","607":"Huyện Trà Bồng","608":"Huyện Tư Nghĩa","609":"Thành phố Quảng Ngãi"}},"49":{"name":"Tỉnh Quảng Ninh","districts":{"610":"Huyện Ba Chẽ","611":"Huyện Bình Liêu","612":"Huyện Cô Tô","613":"Huyện Đầm Hà","614":"Huyện Đông Triều","615":"Huyện Hải Hà","616":"Huyện Hoành Bồ","617":"Huyện Tiên Yên","618":"Huyện Vân Đồn","619":"Huyện Yên Hưng","620":"Thành phố Hạ Long","621":"Thành phố Móng Cái","622":"Thị xã Cẩm Phả","623":"Thị xã Uông Bí"}},"50":{"name":"Tỉnh Quảng Trị","districts":{"624":"Huyện Cam Lộ","625":"Huyện Cồn Cỏ","626":"Huyện Đa Krông","627":"Huyện Gio Linh","628":"Huyện Hải Lăng","629":"Huyện Hướng Hóa","630":"Huyện Triệu Phong","631":"Huyện Vính Linh","632":"Thành phố Đông Hà","633":"Thị xã Quảng Trị"}},"51":{"name":"Tỉnh Sóc Trăng","districts":{"634":"Huyện Châu Thành","635":"Huyện Cù Lao Dung","636":"Huyện Kế Sách","637":"Huyện Long Phú","638":"Huyện Mỹ Tú","639":"Huyện Mỹ Xuyên","640":"Huyện Ngã Năm","641":"Huyện Thạnh Trị","642":"Huyện Trần Đề","643":"Huyện Vĩnh Châu","644":"Thành phố Sóc Trăng"}},"52":{"name":"Tỉnh Sơn La","districts":{"645":"Huyện Bắc Yên","646":"Huyện Mai Sơn","647":"Huyện Mộc Châu","648":"Huyện Mường La","649":"Huyện Phù Yên","650":"Huyện Quỳnh Nhai","651":"Huyện Sông Mã","652":"Huyện Sốp Cộp","653":"Huyện Thuận Châu","654":"Huyện Yên Châu","655":"Thành phố Sơn La"}},"53":{"name":"Tỉnh Tây Ninh","districts":{"656":"Huyện Bến Cầu","657":"Huyện Châu Thành","658":"Huyện Dương Minh Châu","659":"Huyện Gò Dầu","660":"Huyện Hòa Thành","661":"Huyện Tân Biên","662":"Huyện Tân Châu","663":"Huyện Trảng Bàng","664":"Thị xã Tây Ninh"}},"54":{"name":"Tỉnh Thái Bình","districts":{"665":"Huyện Đông Hưng","666":"Huyện Hưng Hà","667":"Huyện Kiến Xương","668":"Huyện Quỳnh Phụ","669":"Huyện Thái Thụy","670":"Huyện Tiền Hải","671":"Huyện Vũ Thư","672":"Thành phố Thái Bình"}},"55":{"name":"Tỉnh Thái Nguyên","districts":{"673":"Huyện Đại Từ","674":"Huyện Định Hóa","675":"Huyện Đồng Hỷ","676":"Huyện Phổ Yên","677":"Huyện Phú Bình","678":"Huyện Phú Lương","679":"Huyện Võ Nhai","680":"Thành phố Thái Nguyên","681":"Thị xã Sông Công"}},"56":{"name":"Tỉnh Thanh Hóa","districts":{"682":"Huyện Bá Thước","683":"Huyện Cẩm Thủy","684":"Huyện Đông Sơn","685":"Huyện Hà Trung","686":"Huyện Hậu Lộc","687":"Huyện Hoằng Hóa","688":"Huyện Lang Chánh","689":"Huyện Mường Lát","690":"Huyện Nga Sơn","691":"Huyện Ngọc Lặc","692":"Huyện Như Thanh","693":"Huyện Như Xuân","694":"Huyện Nông Cống","695":"Huyện Quan Hóa","696":"Huyện Quan Sơn","697":"Huyện Quảng Xương","698":"Huyện Thạch Thành","699":"Huyện Thiệu Hóa","700":"Huyện Thọ Xuân","701":"Huyện Thường Xuân","702":"Huyện Tĩnh Gia","703":"Huyện Triệu Sơn","704":"Huyện Vĩnh Lộc","705":"Huyện Yên Định","706":"Thành phố Thanh Hóa","707":"Thị xã Bỉm Sơn","708":"Thị xã Sầm Sơn"}},"57":{"name":"Tỉnh Thừa Thiên Huế","districts":{"709":"Huyện A Lưới","710":"Huyện Hương Trà","711":"Huyện Nam Dông","712":"Huyện Phong Điền","713":"Huyện Phú Lộc","714":"Huyện Phú Vang","715":"Huyện Quảng Điền","716":"Thành phố Huế","717":"thị xã Hương Thủy"}},"58":{"name":"Tỉnh Tiền Giang","districts":{"718":"Huyện Cái Bè","719":"Huyện Cai Lậy","720":"Huyện Châu Thành","721":"Huyện Chợ Gạo","722":"Huyện Gò Công Đông","723":"Huyện Gò Công Tây","724":"Huyện Tân Phú Đông","725":"Huyện Tân Phước","726":"Thành phố Mỹ Tho","727":"Thị xã Gò Công"}},"59":{"name":"Tỉnh Trà Vinh","districts":{"728":"Huyện Càng Long","729":"Huyện Cầu Kè","730":"Huyện Cầu Ngang","731":"Huyện Châu Thành","732":"Huyện Duyên Hải","733":"Huyện Tiểu Cần","734":"Huyện Trà Cú","735":"Thành phố Trà Vinh"}},"60":{"name":"Tỉnh Tuyên Quang","districts":{"736":"Huyện Chiêm Hóa","737":"Huyện Hàm Yên","738":"Huyện Na hang","739":"Huyện Sơn Dương","740":"Huyện Yên Sơn","741":"Thành phố Tuyên Quang"}},"61":{"name":"Tỉnh Vĩnh Long","districts":{"742":"Huyện Bình Minh","743":"Huyện Bình Tân","744":"Huyện Long Hồ","745":"Huyện Mang Thít","746":"Huyện Tam Bình","747":"Huyện Trà Ôn","748":"Huyện Vũng Liêm","749":"Thành phố Vĩnh Long"}},"62":{"name":"Tỉnh Vĩnh Phúc","districts":{"750":"Huyện Bình Xuyên","751":"Huyện Lập Thạch","752":"Huyện Sông Lô","753":"Huyện Tam Đảo","754":"Huyện Tam Dương","755":"Huyện Vĩnh Tường","756":"Huyện Yên Lạc","757":"Thành phố Vĩnh Yên","758":"Thị xã Phúc Yên"}},"63":{"name":"Tỉnh Yên Bái","districts":{"759":"Huyện Lục Yên","760":"Huyện Mù Cang Chải","761":"Huyện Trạm Tấu","762":"Huyện Trấn Yên","763":"Huyện Văn Chấn","764":"Huyện Văn Yên","765":"Huyện Yên Bình","766":"Thành phố Yên Bái","767":"Thị xã Nghĩa Lộ"}}}

            var html='';
            for(var key in data)
            {
                if(value == data[key][['name']])
                {
                    html += '<option>Chọn quận huyện</option>'
                    for(var keys in data[key]['districts'])
                    {
                        html += '<option>'+data[key]['districts'][keys]+'</option>'
                    }
                }

            }
            $('select[name="ship_wards"]').html(html)
        });
}
});

})
function load_all_product() {
    var data
    $.ajax({
        url: window.location.origin+'/api/products/get-all-products', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep.data

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function get_size_product(id) {
    var data
    id = parseInt(id)
    var form = new FormData();
    form.append('id',id);
    $.ajax({
        url: window.location.origin+'/api/products/get-size-product', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: form,
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep.data

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function get_color_product(id) {
    var data
    id = parseInt(id)
    var form = new FormData();
    form.append('id',id);
    $.ajax({
        url: window.location.origin+'/api/products/get-color-product', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep.data

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function get_image_product(id) {
    var data
    id = parseInt(id)
    var form = new FormData();
    form.append('id',id);
    $.ajax({
        url: window.location.origin+'/api/products/get-image-product', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep.data

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function get_infor_product(id) {
    var data
    id = parseInt(id)
    var form = new FormData();
    form.append('id',id);
    $.ajax({
        url: window.location.origin+'/api/products/get-infor-product', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep.data

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function sum_all_invoice() {
    var b_sum = $('b.sum');
    var tong = 0
    for(var i = 0;i<b_sum.length;i++)
    {
        tong+= parseInt($(b_sum[i]).html())
    }
    var i_tax = $('i.taxs');

    var b_price_ship = $('i.price_ship');
    for(var i = 0;i<i_tax.length;i++)
    {
        tong+= parseInt($(i_tax[i]).html())
    }
    for(var i = 0;i<b_price_ship.length;i++)
    {
        tong+= parseInt($(b_price_ship[i]).html())
    }

    $('#sum-invoice').html(tong)
}
function load_all_customer()
{
    var data
    $.ajax({
        url: window.location.origin+'/api/customers/get-all-customer', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    $('select[name="customer_id"]').html('')
    var html_customer = '<option><option>'
    for (var i = data.length - 1; i >= 0; i--) {
        html_customer+='<option value="'+data[i].id+'">'+data[i].first_name+' '+data[i].last_name+'</option>'
    }
    $('select[name="customer_id"]').html(html_customer)

}
function get_infor_customer(id) {
    var data
    id = parseInt(id)
    var form = new FormData();
    form.append('id',id);
    $.ajax({
        url: window.location.origin+'/api/customers/get-one-customer', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function add_invoice(form){
    var data = false
    $.ajax({
        url: window.location.origin+'/api/invoices/add-invoice', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        success: function(rep){

            if(rep == false)
            {
                new PNotify({
                    title: 'Thất bại',
                    text: 'Không thể kết nối đến server',
                    addclass: 'bg-danger'
                });
            }
            else {
                data = rep
                console.log(data)

            }
        },
        error : function (err) {
            new PNotify({
                title: 'Thất bại',
                text: 'Không thể kết nối đến server',
                addclass: 'bg-danger'
            });
        }
    });
    return data
}
function kiem_tra_trung_san_pham(id,mang_sp)
{
    for (var i = mang_sp.length - 1; i >= 0; i--) {
        if(mang_sp[i].id == id)
        {
            return false;
        }
    }
    return true;
}