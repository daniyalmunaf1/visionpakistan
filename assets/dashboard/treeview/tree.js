function user(h,image,btn,scoreH,scoreH1){
    // scoreH1.style.display='block';
   if (h.innerText=='') {
    
       image.style.background = 'black';
       scoreH1.style.display='none';
       scoreH.style.display='block';
   }
    if(image.style.background == 'black'){
       btn.style.background = 'gray';
       btn.style.cursor='no-drop';
       btn.style.border = 'none';
       btn.style.color = '#c89f9f';
    }
    }

const h3 = document.querySelector('.member-h3-1');
const img = document.querySelector('.user-img1');
const treebtn = document.querySelector('.submit-btn-tree')
const scoreHeading = document.querySelector('.complete-score')
const scoreHeading1 = document.querySelector('.complete-score1')
const h3_2 = document.querySelector('.member-h3-2');
const img2 = document.querySelector('.user-img2');
const h3_3 = document.querySelector('.member-h3-3');
const img3 = document.querySelector('.user-img3');
const h3_4 = document.querySelector('.member-h3-4');
const img4 = document.querySelector('.user-img4');
const h3_5 = document.querySelector('.member-h3-5');
const img5 = document.querySelector('.user-img5');
const h3_6 = document.querySelector('.member-h3-6');
const img6 = document.querySelector('.user-img6');
const h3_7 = document.querySelector('.member-h3-7');
const img7 = document.querySelector('.user-img7');

user(h3,img,treebtn,scoreHeading,scoreHeading1);
user(h3_2,img2,treebtn,scoreHeading,scoreHeading1);
user(h3_3,img3,treebtn,scoreHeading,scoreHeading1);
user(h3_4,img4,treebtn,scoreHeading,scoreHeading1);
user(h3_5,img5,treebtn,scoreHeading,scoreHeading1);
user(h3_6,img6,treebtn,scoreHeading,scoreHeading1);
user(h3_7,img7,treebtn,scoreHeading,scoreHeading1);
