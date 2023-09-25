const bookStyle = `
     
`;

 
const footer = `
<!--하단 네비게이션-->
<nav class="navbar fixed-bottom navbar-expand-sm bg-white ">
   <div class="container-fluid" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' 0, 'opsz' 48;">
       <ul class="bottom_nav_wrap">
           <li class="nav_active" onclick="location.href='index.html'">
           <span class="material-symbols-outlined">home</span>
               임대
           </li>
           <li onclick="location.href='write_1.html'">
           <span class="material-symbols-outlined">calculate </span>
           세무
           </li>
           <li onclick="location.href='brand.html'">
           <span class="material-symbols-outlined">calendar_month </span>
           일정
           </li>
           <li onclick="location.href='search.html'">
           <span class="material-symbols-outlined">support_agent </span>
           상담
           </li>
           <li onclick="location.href='login.html'">
           <span class="material-symbols-outlined">apps</span>
           더보기
           </li>
       </ul>

   </div>
</nav>

`;

let varTable = {};
varTable.footer = footer;

function writeStyles(styleNameId, cssText) {
    var styleElement = document.getElementById(styleNameId);
    if (styleElement)
        document.getElementsByTagName('head')[0].removeChild(styleElement);
    styleElement = document.createElement('style');
    styleElement.type = 'text/css';
    styleElement.id = styleNameId;
    styleElement.innerHTML = cssText;
    document.getElementsByTagName('head')[0].appendChild(styleElement);
}

const varToString = varObj => Object.keys(varObj)[0];

function includeHTML() {
  list = document.getElementsByTagName("*");
  for (n = 0; n < list.length; n++) {
    let element = list[n];
    let attr = element.getAttribute("include-html");
    if(attr) {
        if(varTable[attr])
            element.innerHTML = varTable[attr];
        else
            element.innerHTML = "includeHTML error: " + attr;
    }
  }
}

