
$(document).ready( function(){

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $( "#rule" ).modal("show");
    badge("#badge");

function badge(div_img_id){
    
    let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/badge.png'
               }).appendTo(div_img_id);
            }

}
 $("#start").click(()=>{
    let point=0;
    let live=4;
    let life=3;
    let value=2000;
    var num=0;
    var isTimeOn = 0;
    $("#life").html(life);
    
    
    $("#s_submit").click(()=>{
        //location.href = "http://127.0.0.1:8000/score";
        window.open('http://cmpe101.herokuapp.com/score?point='+point,target='_blank');

    })
    $("#score_submit").click(()=>{
        //location.href = "http://127.0.0.1:8000/score";
        window.open('http://cmpe101.herokuapp.com/score?point='+point,target='_blank');

    })
    $("#scores_submit").click(()=>{
        //location.href = "http://127.0.0.1:8000/score";
        window.open('http://cmpe101.herokuapp.com/score?point='+point,target='_blank');

    })
   
   

let current_progress = 0;
let time_counter=0;
var block= 0;


function remove(id){
    $(`#tr${id}`).fadeOut(3000);
    // $(id).fadeOut(2000, function() { 
        //  $(id).remove(); 
   
        // })
}

function progress(){
    $(function() {
        if(current_progress!=100){
            current_progress += 10;
            $("#dynamic")
            .css("width", current_progress + "%")
            .attr("aria-valuenow", current_progress)
            .text(current_progress + " ");
            
        }else{
            $( "#exampleModal" ).modal("show");
            current_progress=0;
        }
    })
}

const runCalc  = ( endvalue, values, time, id)=> {
        
        var sum = 0;
        isTimeOn = point;
        for(var i=0; i<values.length; i++){
            sum+= values[i];
        }
        if(sum == endvalue){
            remove(id);
            isTimeOn =11;
            if((id==4)&&(point==30)){
              life+=1;
               $("#life").html(life);
               //progress();
               console.log("life",id,point,life);
            }
            else if((id==6)&&(point==50))
            {
                $(".message").html("Congrats you got a silver badge");
                silver("#badge");
                $(".img_badge").html("Silver badge");
            }
            else if((id==7)&&(point==60)){
                life+=1;
                $("#life").html(life);
            }
            console.log(isTimeOn, "point", point, values);
        }
       
        

}
 function startTimer(duration,display,id) {
    var timer = duration, minutes, seconds;
    
    time_counter++
    block++
    let counterIncrement=-1;
    live=live+counterIncrement;
    
    const Interval = setInterval(function () {
       
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
    
        if (--timer < 0) {
            console.log("id--",id)
            console.log(isTimeOn,"point2", point)
            if(isTimeOn > point){
                console.log(isTimeOn,"passed",point);
                point +=10;
                $("#point").html(point);
                progress();
                isTimeOn = point;
                clearInterval(Interval);
                //remove(id)   
                if(life<=0)
                  life=0;
                  if((point==90)&&((life==4)||(life==5))&&(id==10)){
                    $( "#win" ).modal("show");
                    $("#login2").click(function(){
                        $( "#win" ).modal("hide");
                    });
                  }
                else if(point>90){
                    $(".message").html("Wow! you got a gold badge");
                    gold("#badge");
                    $(".img_badge").html("Gold badge");
                    $( "#exampleModal" ).modal("show");
                    $("#stop").click(function(){
                        $( "#exampleModal" ).modal("hide"); 
                    });
                    $("#login2").click(function(){
                        $( "#win" ).modal("hide");
                    });
                }
               
               else if((point=90)||(current_progress==90)&&((life==4)||(life==5)))
               {
                   $( "#lost" ).modal("hide"); 
   
               }
            }
         else if(isTimeOn == point) {
                console.log(isTimeOn,'failed',point);
                   life -=1;
                if(life<1) {
                    $( "#lost" ).modal("show"); 
                    $("#close").click(function(){
                        $( "#lost" ).modal("hide");
                    });
                    life=0;
                }
                counterIncrement=-counterIncrement;
                $("#life").html(life);
                clearInterval(Interval);
                
            }
            
            $(`#button1${id}`).prop('disabled', true);
            $(`#button2${id}`).prop('disabled', true);
            $(`#button3${id}`).prop('disabled', true);
            $(`#button4${id}`).prop('disabled', true);
            $(`#button5${id}`).prop('disabled', true);
            $(`#button6${id}`).prop('disabled', true);
            $(`#button7${id}`).prop('disabled', true);
            $(`#button8${id}`).prop('disabled', true);
            $(`#test${id}`).prop('disabled', true);
            
            
        }
        
    }, 1000);
    
}

function changeValue(value)
{
    $(value).click(function(){
         
         btn10=($(value).val()); 
         //toggle btw 1 and 0 when button is clicked
         if(btn10==0)
         {
             $(value).val("1")
             $(value).css({
                backgroundColor: '#0275d8',
                color:'#fff',
                outline:'none'
              });
         }else if(btn10==1){
             $(value).val("0")
             $(value).css({
                backgroundColor: '#fff',
                color:'#000',
                outline:'none'
              });
         }//toggle ends
        });
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


function calculate(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id)
{
    let btn1=0,btn2=0,btn3=0,btn4=0,btn5=0,btn6=0,btn7=0,btn8=0,output=0;
    let b1,b2,b3,b4,b5,b6,b7,b8; 
    output=parseInt($(input).val());
    var values = [0,0,0,0,0,0,0,0]
    
            $(value1).click(function() {
                 //value of input field type text
                b1=($(value1).val()); //value of input field type button
                btn1=($(value2).val());
                if(b1==1)
                {

                     //value of input field type hidden that holds the value to be calculated
                    values[0]= parseInt(btn1);
                }else{
                     //changing hidden value to 0 when double clicked
                    values[0] = 0
                }
                
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value3).click(function() {
                b2=($(value3).val()); 
                btn2=($(value4).val()); 
                if(b2==1)
                {
                    values[1] = parseInt(btn2);
                }else{
                    values[1] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value5).click(function() {
                b3=($(value5).val()); 
                btn3=($(value6).val()); 
                if(b3==1)
                {
                    values[2] = parseInt(btn3);
                }else{
                   values[2] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value7).click(function() {
                
                b4=($(value7).val()); 
                btn4=($(value8).val()); 
                if(b4==1)
                {
                    values[3] = parseInt(btn4);
                }else{
                    values[3] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value9).click(function() {
                
                b5=($(value9).val()); 
                btn5=($(value10).val());
                if(b5==1)
                {
                    values[4] = parseInt(btn5);
                }else{
                    values[4] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value11).click(function() {
                
                b6=($(value11).val()); 
                btn6=($(value12).val());
                if(b6==1)
                {
                     values[5] = parseInt(btn6);
                }else{
                    values[5] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value13).click(function() {
                
                b7=($(value13).val()); 
                btn7=($(value14).val()); 
                if(b7==1)
                {
                    values[6] = parseInt(btn7);
                }else{
                    values[6]  = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
            $(value15).click(function() {
                
                b8=($(value15).val()); 
                btn8=($(value16).val());
                if(b8==1)
                {
                     values[7] = parseInt(btn8);
                }else{
                    values[7] = 0;
                }
                runCalc(output, values, isTimeOn, role_id);
            });
        
}
function calculate2(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id)
    {
        var values = [0,0,0,0,0,0,0,0]
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
           output=parseInt(($(input).val())); 
           if(b1==1)
           
               btn1=($(value2).val());
               values[0] = parseInt(btn1); 
           if(b2==1)
               btn2=($(value4).val());
               values[1] = parseInt(btn2);
           if(b3==1)
               btn3=($(value6).val());
               values[2] = parseInt(btn3); 
           if(b4==1)
               btn4=($(value8).val());
               values[3] = parseInt(btn4); 
           if(b5==1)
               btn5=($(value10).val());
               values[4] = parseInt(btn5); 
           if(b6==1)
               btn6=($(value12).val());
               values[5] = parseInt(btn6); 
           if(b7==1)
               btn7=($(value14).val()); 
               values[6] = parseInt(btn7);
           if(b8==1)
               btn8=($(value16).val()); 
               values[7] = parseInt(btn8);
            
               runCalc(output, values, isTimeOn, role_id);       
    }
    num++
  block++
  var Tab1 =  setTimeout(function(){
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
                <td><input type="text"class="btext" value="18" id="test${num}"style="" name=btn${num}/></td>
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
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`)
            
                badge("#badge")
                let time= 25
                display = document.querySelector('#timer');
                
               startTimer(time,display,num);
    }, value + (block - 1)*1000);
    block++
    var Tab2 =  setTimeout(function(){
    clearTimeout(Tab1);

       num++
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
                <td><input type="text" class="btext" value="54" id="test${num}"style="" name=btn${num}/></td>
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
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`)
                    let time= 25
                    display = document.querySelector('#timer');
                   startTimer(time,display,num);
        
    },value + (block - 1)*1000 * 26)
    block++
    var Tab3 =   setTimeout(function(){
    clearTimeout(Tab2);

        num++;
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
                <td><input type="text" class="btext" id=text${num} style="" name="text"/></td>
                </tr>`)
                
            $( `#text${num}` ).on("change", function() {
                calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
                `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`${num}`)
    
            });
            let time= 25
            display = document.querySelector('#timer');
           startTimer(time,display,num);
    }, value + (block - 1)*1000 * 26);
    block++
var Tab4 =   setTimeout(function(){
    clearTimeout(Tab3);

        num++;
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
        <input type="button" id="button3${num}"value="1"class="b_game" name="btn3"/>
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
        <input type="button" id="button6${num}" value="0" class="b_game" name="btn6"/>
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
        <td><input type="text" class="btext" id=text${num} style="" name="text"/></td>
        </tr>`)
        
    $( `#text${num}` ).on("change", function() {
        calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`${num}`)

    });
        let time= 25
        display = document.querySelector('#timer');
        startTimer(time,display,num);
    
    }, value + (block - 1) *1000 *26);
    block++
    var Tab5 = setTimeout(function(){
    clearTimeout(Tab4);

        num++;
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
                <td><input type="text" class="btext" value="23" id="test${num}" style="" name=btn${num}/></td>
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
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`)
                   
                    let time= 25
                    display = document.querySelector('#timer');
                    startTimer(time,display,num);
                   
    }, value + (block - 1) * 1000 * 26);
    block++
    var Tab6 =  setTimeout(function(){
    clearTimeout(Tab5);

        num++
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
                <td><input type="text" class="btext" value="73" id="test${num}" style="" name=btn${num}/></td>
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
                    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`);
                    let time= 25
                    display = document.querySelector('#timer');
                   startTimer(time,display,num);
    }, value + (block - 1) * 1000 * 26);
   block++
   var Tab7 = setTimeout(function(){
    clearTimeout(Tab6);

    num++
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
    <td><input type="text" class="btext" value="7" id="test${num}" style="" name=btn${num}/></td>
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
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`)
        let time= 20
        display = document.querySelector('#timer');
       startTimer(time,display,num);
   }, value + (block - 1) * 1000 * 21)
   block++
   var Tab8 =  setTimeout(function(){
    clearTimeout(Tab7);

       num++
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
    <input type="button" id="button6${num}" value="0" class="b_game" name="btn6"/>
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
    <td><input type="text" class="btext" id=text${num} style="" name="text"/></td>
    </tr>`)
    
$( `#text${num}` ).on("change", function() {
    calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`${num}`)

});
let time= 20
display = document.querySelector('#timer');
startTimer(time,display,num);
   },value + (block - 1) * 1000 * 21);
   block++
   var Tab9 = setTimeout(function(){
    clearTimeout(Tab8);

       num++
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
    <td><input type="text" class="btext" id=text${num} style="" name="text"/></td>
    </tr>`)
    
$( `#text${num}` ).on("change", function() {
    calculate2(`#button1${num}`,'#h_button1',`#button2${num}`,'#h_button2',`#button3${num}`,'#h_button3',`#button4${num}`,'#h_button4',
    `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#text${num}`,`${num}`)

});
let time= 20
display = document.querySelector('#timer');
startTimer(time,display,num);
   }, value + (block - 1) * 1000 * 21)
   block++
   var Tab10 =  setTimeout(function(){
    clearTimeout(Tab9);

       num++
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
    <td><input type="text" class="btext" value="129" id="test${num}" style="" name=btn${num}/></td>
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
        `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`)
        let time= 20
        display = document.querySelector('#timer');
       startTimer(time,display,num);
   }, value + (block - 1) * 1000 * 21)
   block++
   var Tab11 =  setTimeout(function(){
   clearTimeout(Tab10);

       num++
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
               <td><input type="text" class="btext" value="73" id="test${num}" style="" name=btn${num}/></td>
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
                   `#button5${num}`,'#h_button5',`#button6${num}`,'#h_button6',`#button7${num}`,'#h_button7',`#button8${num}`,'#h_button8',`#test${num}`,`${num}`);
                   let time= 20
                   display = document.querySelector('#timer');
                  startTimer(time,display,num);
   }, value + (block - 1) * 1000 * 21);
  
});
});  
