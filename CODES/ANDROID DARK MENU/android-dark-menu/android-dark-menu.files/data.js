/*
   Deluxe Menu Data File
   Created by Deluxe Tuner v4.1
   http://deluxe-menu.com
*/


// -- Deluxe Tuner Style Names
var itemStylesNames=["Top Item","Top First Item",];
var menuStylesNames=["Submenu",];
// -- End of Deluxe Tuner Style Names

//--- Common
var menuIdentifier="androidDark";
var isHorizontal=1;
var smColumns=1;
var smOrientation=0;
var dmRTL=0;
var pressedItem=-2;

//--- Dimensions
var menuWidth="";
var menuHeight="";
var smWidth="";
var smHeight="";

//--- Positioning
var absolutePos=0;
var posX="";
var posY="";
var subMenuAlign="left";
var subMenuVAlign="top";
var topDX=10;
var topDY=-4;
var DX=-6;
var DY=0;

//--- Font
var fontStyle=["normal 14px Tahoma","normal 14px Tahoma"];
var fontColor=["#FFF","#F2B20E"];
var fontDecoration=["none","none"];
var fontColorDisabled="#AAAAAA";

//--- Appearance
var menuBackColor="#dedede";
var menuBackImage="";
var menuBackRepeat="repeat";
var menuBorderColor="#5F5F5F";
var menuBorderWidth="1px";
var menuBorderStyle="solid";
var smFrameImage="android-dark-menu.files/sub.png";
var smFrameWidth=15;

//--- Item Appearance
var itemBackColor=["#424542","#424542"];
var itemBackImage=["android-dark-menu.files/none","android-dark-menu.files/none"];
var itemSlideBack=0;
var itemBorderWidth="0px";
var itemBorderColor=["#C0C0C0","#C0C0C0"];
var itemBorderStyle=["solid","solid"];
var itemSpacing=0;
var itemPadding="4px";
var itemAlignTop="left";
var itemAlign="left";
var itemCursor="pointer";

//--- Item Icons
var iconTopWidth="";
var iconTopHeight="";
var iconWidth="";
var iconHeight="";
var arrowImageMain=["",""];
var arrowWidth="";
var arrowHeight="";
var arrowImageSub=["android-dark-menu.files/arrowsub.png",""];
var arrowWidthSub=4;
var arrowHeightSub=5;

//--- Separators
var separatorImage="android-dark-menu.files/hsep.png";
var separatorColor="";
var separatorWidth="100%";
var separatorHeight="1px";
var separatorAlignment="center";
var separatorVImage="";
var separatorVColor="";
var separatorVWidth="0px";
var separatorVHeight="100%";
var separatorPadding="0px";

//--- Transitional Effects & Sound
var transparency="100";
var transition=-1;
var transOptions="";
var transDuration=350;
var transDuration2=200;
var shadowLen=0;
var shadowColor="#B1B1B1";
var shadowTop=0;
var onOverSnd="";
var onClickSnd="";

//--- CSS Support (CSS-based Menu)
var cssSubmenu="";
var cssItem=["",""];
var cssItemText=["",""];

//--- Floatable Menu
var floatable=0;
var floatIterations=6;
var floatableX=1;
var floatableY=1;
var floatableDX=15;
var floatableDY=15;

//--- AJAX-like Technology
var dmAJAX=0;
var ajaxReload=0;

//--- Advanced Features
var saveNavigationPath=1;
var noWrap=1;
var showByClick=0;
var smShowPause=200;
var smHideOnClick=1;
var smHidePause=1000;
var smSmartScroll=1;
var topSmartScroll=0;
var dm_writeAll=1;
var dmObjectsCheck=0;
var useIFRAME=0;
var popupMode=0;
var dynamic=0;
var keystrokes=0;
var dm_focus=1;
var dm_actKey=113;
var pathPrefix_img="";
var pathPrefix_link="";

//--- Movable Menu
var movable=0;
var moveWidth=12;
var moveHeight=20;
var moveColor="#DECA9A";
var moveImage="";
var moveCursor="move";
var smMovable=0;
var closeBtnW=15;
var closeBtnH=15;
var closeBtn="";
var blankImage="android-dark-menu.files/blank.gif";

//--- Deprecated Features
var beforeItemImage=["",""];
var afterItemImage=["",""];
var beforeItemImageW="";
var afterItemImageW="";
var beforeItemImageH="";
var afterItemImageH="";
var statusString="";
var itemTarget="";
var dmSearch=0;

var itemStyles = [
    ["itemHeight=38px","itemBackColor=#444444,#444444","itemBackImage=android-dark-menu.files/back0_0.png,android-dark-menu.files/back0_1.png","itemBorderWidth=0 0 0 1px","itemBorderStyle=solid,solid","itemBorderColor=#C0C0C0,#C0C0C0","fontStyle='bold 14px Trebuchet MS,sans-serif','bold 14px Trebuchet MS,sans-serif'","fontColor=#000,#FFF"],
    ["itemHeight=38px","itemBackColor=#444444,#444444","itemBackImage=android-dark-menu.files/back0_0.png,android-dark-menu.files/back0_1.png","itemBorderWidth=0px","itemBorderStyle=none,none","itemBorderColor=#C0C0C0,#C0C0C0","fontStyle='bold 14px Trebuchet MS,sans-serif','bold 14px Trebuchet MS,sans-serif'","fontColor=#000,#FFF"],
];
var menuStyles = [
    ["menuBackColor=#424542","menuBorderWidth=0px","menuBorderStyle=none","itemSpacing=0","itemPadding=1px 6px 8px"],
];
dm_init();