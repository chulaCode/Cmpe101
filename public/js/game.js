
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
function badge(div_img_id){
    
    let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/badge.png'
               }).appendTo(div_img_id);
            }

}
function bronze(div_img_id){
    
    let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/bronze.png'
               }).appendTo(div_img_id);
            }

}
function silver(div_img_id){
    
    let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/silver1.png'
               }).appendTo(div_img_id);
            }

}
function gold(div_img_id){
    
    let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/gold1.png'
               }).appendTo(div_img_id);
            }

}
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

let point=0;
function calculate(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id)
{
    let btn1=0,btn2=0,btn3=0,btn4=0,btn5=0,btn6=0,btn7=0,btn8=0,output=0;
    let b1,b2,b3,b4,b5,b6,b7,b8;
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
            num1=0,num2=0,num3=0,num4=0,num5=0,num6=0,num7=0,num8=0,num9=0,total=0
            point+=10;
            if((point>20)&&(point<50)){
            $(".message").html("You just won a bronze badge");
            bronze("#badge");
            $(".img_badge").html("Bronze badge");
            }
            else if((point>50)&&(point<90)){
            $(".message").html("You just won a silver badge");
            silver("#badge");
            $(".img_badge").html("Silver badge");
            }
            else if(point>90){
            $(".message").html("You just won a gold badge");
            gold("#badge");
            $(".img_badge").html("Gold badge");
            $( "#exampleModal" ).modal("show");
            $("#stop").click(function(){
                location.reload();
            });
            } 
            $("#timer").html(point);
            progress();
            
            }
            console.log(num1,num2,num3,num4,num5,num6,num7,num8,num9,role_id, total) 
    }
}
function calculate2(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id)
    {
        let btn1=0,btn2=0,btn3=0,btn4=0,btn5=0,btn6=0,btn7=0,btn8=0,output=0;
        let b1,b2,b3,b4,b5,b6,b7,b8;
    
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

         // console.log(output)
          num1=parseInt(btn1);num2=parseInt(btn2);num3=parseInt(btn3);num4=parseInt(btn4);
          num5=parseInt(btn5);num6=parseInt(btn6);num7=parseInt(btn7);num8=parseInt(btn8);
          num9=parseInt(output);
          let total=num1+num2+num3+num4+num5+num6+num7+num8;
         if(total==num9){
            console.log("yes correct") 
            remove(role_id);
            //num1=0,num2=0,num3=0,num4=0,num5=0,num6=0,num7=0,num8=0,num9=0,total=0
            point+=10;
            if((point>20)&&(point<50)){
                $(".message").html("You just won a bronze badge");
                bronze("#badge");
                $(".img_badge").html("Bronze badge");
                }
                else if((point>50)&&(point<90)){
                $(".message").html("You just won a silver badge");
                silver("#badge");
                $(".img_badge").html("Silver badge");
                }
                else if(point>90){
                $(".message").html("You just won a gold badge");
                gold("#badge");
                $(".img_badge").html("Gold badge");
                $( "#exampleModal" ).modal("show");
                $("#stop").click(function(){
                    location.reload();
                });
                 
             } 
            $("#timer").html(point);
            progress();
        
            }
         
         console.log(num1,num2,num3,num4,num5,num6,num7,num8,num9,role_id,total)
            
    }

    setInterval(function()
    {  

            num++;
            
            if(num==1)
            {
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="241" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
                badge("#badge")
            }
            else if(num==2)
            { 
              //table2(num,ran1,ran2,ran3,ran4,ran5,ran6,ran7,ran8)
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="101" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
            }
            else if(num==3)
            {
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn1"/>
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn2"/>
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="1"class="b_game" name="btn3"/>
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="1"class="b_game" name="btn4"/>
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn5"/>
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="1" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}"value="0"class="b_game" name="btn7"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="1"class="b_game" name="btn8"/>
                <input type="hidden"id="h_button8" value="1" name="btn8"/>
                </td>
                <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                </tr>`)
                
            $( `#text${num}` ).change(function() {
                calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`#tr${num}`)
    
            });
          
            }
            else if((num==4))
            {
                //table2(num,ran1,ran2,ran3,ran4,ran5,ran6,ran7,ran8)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="1" class="b_game" name="btn1"/>
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="1"class="b_game" name="btn2"/>
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="1"class="b_game" name="btn3"/>
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn4"/>
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn5"/>
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="1" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}"value="0"class="b_game" name="btn7"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn8"/>
                <input type="hidden"id="h_button8" value="1" name="btn8"/>
                </td>
                <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                </tr>`)
                
            $( `#text${num}` ).change(function() {
                calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`#tr${num}`)
    
            });
            } 
            else if(num==5)
            {
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="23" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
               
            }
            else if(num==6)
            {
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="201" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
               
            }
            else if(num==7)
            {  
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="7" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
            }
            else if(num==8)
            {
                //table2(num,ran1,ran2,ran3,ran4,ran5,ran6,ran7,ran8)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn1"/>
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="1"class="b_game" name="btn2"/>
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn3"/>
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="1"class="b_game" name="btn4"/>
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn5"/>
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="1" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}"value="1"class="b_game" name="btn7"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="1"class="b_game" name="btn8"/>
                <input type="hidden"id="h_button8" value="1" name="btn8"/>
                </td>
                <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                </tr>`)
                
            $( `#text${num}` ).change(function() {
                calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`#tr${num}`)
    
            });
            }
            else if(num==9)
            {
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn1"/>
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn2"/>
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn3"/>
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn4"/>
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="1"class="b_game" name="btn5"/>
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="1" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}"value="1"class="b_game" name="btn7"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn8"/>
                <input type="hidden"id="h_button8" value="1" name="btn8"/>
                </td>
                <td><input type="text"  id=text${num} style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                </tr>`)
                
            $( `#text${num}` ).change(function() {
                calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`#tr${num}`)
    
            });
            }
            else if(num==10)
            {
               // table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="129" id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
            }
            else if(num==11)
            {
                //table(num,random)
                $('#myTable').prepend(`<tr id=tr${num}>
                <td>
                <input type="button" id="button1${num}" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button2${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button3${num}"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button4${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button5${num}" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button6${num}" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button7${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button8${num}" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="text" value="200 " id="test${num}"style="text-align:center; font-weight:20px;background-color: #10140E;
                color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name=btn${num}/></td>
                </tr>`)
            
                    changeValue(`#button1${num}`)
                    changeValue(`#button2${num}`)
                    changeValue(`#button3${num}`)
                    changeValue(`#button4${num}`)
                    changeValue(`#button5${num}`)
                    changeValue(`#button6${num}`)
                    changeValue(`#button7${num}`)
                    changeValue(`#button8${num}`)
                    calculate(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`#tr${num}`)
            
            }
            else if(point==100)
            {
                $( "#lost" ).modal("hide"); 

            }
            else{
                $( "#lost" ).modal("show"); 
                $("#close").click(function(){
                    location.reload();
                });
               // location.reload();
            
            }
        
    }, 1000*20);

//}