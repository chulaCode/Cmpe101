
let num=0;
let current_progress = 0;
function remove(id){
    $(id).fadeOut(2000, function() { 
        $(id).remove(); 
   // $(`#tr${id}`).remove().fadeOut(4000);
    })
}

function progress(){
    $(function() {
        if(current_progress!=100){
            current_progress += 10;
            $("#dynamic")
            .css("width", current_progress + "%")
            .attr("aria-valuenow", current_progress)
            .text(current_progress + "% Complete");
            
        }else{
            current_progress=0;
        }
    })
}
function changeValue(value)
{
    $(value).click(function(){
         
         btn10=($(value).val()); 
         //toggle btw 1 and 0 when button is clicked
         if(btn10==0)
         {
             $(value).val("1")
         }else if(btn10==1){
             $(value).val("0")
         }//toggle ends
        });
}
function silver(div_img_id){
    /*
    let img;
            if (!img) {
                img = $('<img />', {
                    src: '/images/silver1.png'
               }).appendTo(div_img_id);
            }*/

}
let btn1=0,btn2=0,btn3=0,btn4=0,btn5=0,btn6=0,btn7=0,btn8=0,output=0;
     let b1,b2,b3,b4,b5,b6,b7,b8;
let point=0;
function calculate(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id)
{
   
            $(value1).click(function() {
                output=($(input).val()); //value of input field type text
                b1=($(value1).val()); //value of input field type button
                if(b1==1)
                {
                    btn1=($(value2).val()); //value of input field type hidden that holds the value to be calculated
                }else{
                    btn1=($(value2).val(0)); //changing hidden value to 0 when double clicked
                }
                sum()
            });
            $(value3).click(function() {
                output=($(input).val());
                b2=($(value3).val()); 
                if(b2==1)
                {
                    btn2=($(value4).val()); 
                }else{
                    btn2=($(value4).val(0)); 
                }
                sum()
            });
            $(value5).click(function() {
                output=($(input).val());
                b3=($(value5).val()); 
                if(b3==1)
                {
                    btn3=($(value6).val()); 
                }else{
                    btn3=($(value6).val(0)); 
                }
                sum()
            });
            $(value7).click(function() {
                output=($(input).val());
                b4=($(value7).val()); 
                if(b4==1)
                {
                    btn4=($(value8).val()); 
                }else{
                    btn4=($(value8).val(0)); 
                }
                sum()
            });
            $(value9).click(function() {
                output=($(input).val());
                b5=($(value9).val()); 
                if(b5==1)
                {
                    btn5=($(value10).val()); 
                }else{
                    btn5=($(value10).val(0)); 
                }
                sum()
            });
            $(value11).click(function() {
                output=($(input).val());
                b6=($(value11).val()); 
                if(b6==1)
                {
                    btn6=($(value12).val()); 
                }else{
                    btn6=($(value12).val(0)); 
                }
                sum()
            });
            $(value13).click(function() {
                output=($(input).val());
                b7=($(value13).val()); 
                if(b7==1)
                {
                    btn7=($(value14).val()); 
                }else{
                    btn7=($(value14).val(0)); 
                }
                sum()
            });
            $(value15).click(function() {
                output=($(input).val());
                b8=($(value15).val()); 
                if(b8==1)
                {
                    btn8=($(value16).val()); 
                }else{
                    btn8=($(value16).val(0)); 
                }
                sum()
            });
            /*$(name).click(function() {
                output=($(name).val()); 
                sum()
            });*/     
    
    function sum()
    {
        let num1,num2,num3,num4,num5,num6,num7,num8,num9;
        num1=parseInt(btn1);num2=parseInt(btn2);num3=parseInt(btn3);num4=parseInt(btn4);
        num5=parseInt(btn5);num6=parseInt(btn6);num7=parseInt(btn7);num8=parseInt(btn8);
        num9=parseInt(output);
        if (isNaN(num1))
            num1=0;
        if (isNaN(num2))
            num2=0;
        if (isNaN(num3))
            num3=0;
        if (isNaN(num4))
            num4=0;
        if (isNaN(num5))
            num5=0;
         if (isNaN(num6))
            num6=0;
         if (isNaN(num7))
            num7=0;
         if (isNaN(num8))
            num8=0;
        let total=num1+num2+num3+num4+num5+num6+num7+num8;
        if(total==num9){
        console.log("yes correct") 
        remove(role_id);
        point+=10;
        $("#timer").html(point);
        progress();
        silver("#badge");
        }
        console.log(num1,num2,num3,num4,num5,num6,num7,num8,num9,role_id, total) 
    }
   
 
}
function calculate2(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input)
    {
       
           // getting value of input field
           b1=($(value1).val()); 
           b2=($(value3).val());
           b3=($(value5).val());
           b4=($(value7).val());
           b5=($(value9).val());
           b6=($(value11).val());
           b7=($(value13).val());
           b8=($(value15).val());
           output=($(input).val()); 
           if(b1==1)
               btn1=($(value2).val()); 
           if(b2==1)
               btn2=($(value4).val()); 
           if(b3==1)
               btn3=($(value6).val()); 
           if(b4==1)
               btn4=($(value8).val()); 
           if(b5==1)
               btn5=($(value10).val()); 
           if(b6==1)
               btn6=($(value12).val()); 
           if(b7==1)
               btn7=($(value14).val()); 
           if(b8==1)
               btn8=($(value16).val()); 
             
          num1=parseInt(btn1);num2=parseInt(btn2);num3=parseInt(btn3);num4=parseInt(btn4);
          num5=parseInt(btn5);num6=parseInt(btn6);num7=parseInt(btn7);num8=parseInt(btn8);
          num9=parseInt(output);
          let total=num1+num2+num3+num4+num5+num6+num7+num8;
         if(total==num9){

            console.log("yes yes")   
            //delete(role_id)
         }
         console.log(num1,num2,num3,num4,num5,num6,num7,num8,num9,total)
            
    }
    function table(tr_id,random)
    {
        $('#myTable').prepend(`<tr id=tr${tr_id}>
        <td>
        <input type="button" id="button1${tr_id}" value="0" class="b_game" name="btn"  />
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button2${tr_id}" value="0"class="b_game" name="btn" />
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button3${tr_id}"value="0"class="b_game" name="btn" />
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button4${tr_id}" value="0"class="b_game" name="btn" />
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button5${tr_id}" value="0"class="b_game" name="btn" />
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button6${tr_id}" value="0" class="b_game" name="btn"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button7${tr_id}" value="0"class="b_game" name="btn"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button8${tr_id}" value="0"class="b_game" name="btn"/>
        <input type="hidden"id="h_button8" value="1" name="btn7"/>
        </td>
        <td><input type="text" value="${random}" id="test${tr_id}"style="text-align:center; font-weight:20px;background-color: #10140E;
        color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${tr_id}/></td>
         </tr>`)
       
            changeValue(`#button1${tr_id}`)
            changeValue(`#button2${tr_id}`)
            changeValue(`#button3${tr_id}`)
            changeValue(`#button4${tr_id}`)
            changeValue(`#button5${tr_id}`)
            changeValue(`#button6${tr_id}`)
            changeValue(`#button7${tr_id}`)
            changeValue(`#button8${tr_id}`)
            calculate(`#button1${tr_id}`,'#h_button1',`#button2${tr_id}`,'#h_button2',`#button3${tr_id}`,'#h_button3',`#button4${tr_id}`,'#h_button4',
            `#button5${tr_id}`,'#h_button5',`#button6${tr_id}`,'#h_button6',`#button7${tr_id}`,'#h_button7',`#button8${tr_id}`,'#h_button8',`#test${tr_id}`,`#tr${tr_id}`)
    }
   
   
/*
$('#myTable').on( function () {
    $(this).closest('tr').remove();
})*/

//function timing(){ 
    setInterval(function(){   
        let random=Math.floor((Math.random() * 255) + 1)
        let ran1=Math.round(Math.random())//generate a random number between 0 and 1
        let ran2=Math.round(Math.random())
        let ran3=Math.round(Math.random())
        let ran4=Math.round(Math.random()) 
        let ran5=Math.round(Math.random())
        let ran6=Math.round(Math.random())
        let ran7=Math.round(Math.random())
        let ran8=Math.round(Math.random())
       // console.log(ran1, ran2,ran3,ran4,ran5,ran6,ran7,ran8)
        num++;
    
    if(num==1){
       val1=1;  val3=random; 
        table(val1,val3)
      
    }
   
         
    else if(num==2)
      { 
        $('#myTable').prepend(`<tr id=tr${num}>
        <td>
        <input type="button" id="button1${num}" value="${ran1}" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button2${num}" value="${ran2}"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button3${num}"value="${ran3}"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button4${num}" value="${ran4}"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button5${num}" value="${ran5}"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button6${num}" value="${ran6}" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button7${num}"value="${ran7}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button8${num}" value="${ran8}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
        color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
         </tr>`)
        //alert("GAME OVER CLICK OK TO START AGAIN");
       // location.reload();
       $( "#text2" ).change(function() {
        calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8','#text2','tr2')
   
      });
           
    } else if(num==3)
    {
        val1=3;  val2=random; 
        table(val1,val2)
       
    }
    else if((num==4) ){
        $('#myTable').prepend(`<tr id=tr${num}>
        <td>
        <input type="button" id="button1${num}" value="${ran1}" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button2${num}" value="${ran2}"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button3${num}"value="${ran3}"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button4${num}" value="${ran4}"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button5${num}" value="${ran5}"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button6${num}" value="${ran6}" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button7${num}"value="${ran7}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button8${num}" value="${ran8}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
        color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
         </tr>`)
        //alert("GAME OVER CLICK OK TO START AGAIN");
       // location.reload();
       $( "#text4" ).change(function() {
        calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8','#text4','tr4')
   
      });
    } else if(num==5)
    {
        val1=5; val2=random;
        table(val1,val2)
    }else if(num==6)
    {
        val1=6;  val2=random;
        table(val1,val2)
    }else if(num==7)
    { 
        val1=7; val2=random; 
        table(val1,val2)
    }
    else if(num==8)
    {
        $('#myTable').prepend(`<tr id=tr${num}>
        <td>
        <input type="button" id="button1${num}" value="${ran1}" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button2${num}" value="${ran2}"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button3${num}"value="${ran3}"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button4${num}" value="${ran4}"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button5${num}" value="${ran5}"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button6${num}" value="${ran6}" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button7${num}"value="${ran7}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button8${num}" value="${ran8}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
        color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
         </tr>`)
       
       $( "#text8" ).change(function() {
        calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8','#text8','tr8')
   
      });
    }
      else if(num==9)
      {
        val1=9; val2=random;
        table(val1,val2)
    }else if(num==10){
              
        $('#myTable').prepend(`<tr id=tr${num}>
        <td>
        <input type="button" id="button1${num}" value="${ran1}" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button2${num}" value="${ran2}"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button3${num}"value="${ran3}"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button4${num}" value="${ran4}"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button5${num}" value="${ran5}"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button6${num}" value="${ran6}" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button7${num}"value="${ran7}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button8${num}" value="${ran8}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
        color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
         </tr>`)
       
       $( "#text8" ).change(function() {
        calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8','#text10','tr10')
   
      });
        }
        else{
            alert('GAME OVER CLICK ON OK TO REPLAY')
            location.reload();
          
        }
   
    }, 1000*10);

//}