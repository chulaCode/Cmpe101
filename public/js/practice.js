
   $(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })
    
    /*end of code*/
    $("#next1").click(()=>{
        let Id = $("#tr12").attr("id");
         remove(Id)
         //alert(Id)
    });

    function remove(id){
        $(`#tr${id}`).fadeOut(3000);
    }

    const runCalc  = (endvalue, values, id)=> {
        console.log(endvalue, values, id)
        var sum = 0;
        for(var i=0; i<values.length; i++){
            sum+= values[i];
        }
        if(sum == endvalue){
            //remove(id);
            //alert(id)
            $(".display").html("That's it!! You got it right");
        }
        else{
            $(".display").html("Nope is not correct");
        }
       
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


function calculate(value1,value2,value3,value4,value5,value6,value7,value8,value9,
    value10,value11,value12,value13,value14,value15,value16,input,role_id,answer)
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
                
                //runCalc(output, values, role_id);
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
                //runCalc(output, values,role_id);
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
                //runCalc(output, values,role_id);
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
                //runCalc(output, values,role_id);
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
                //runCalc(output, values,role_id);
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
                //runCalc(output, values,role_id);
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
               // runCalc(output, values, role_id);
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
                //runCalc(output, values,role_id);
            });
            $(answer).click(function(){
                runCalc(output, values, role_id);
                //console.log(values,"console value")
                
            })
     
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
               runCalc(output, values, role_id);       
    }
    
   
    $('#next1').click(()=>{
        $('#myTable').append(`
       
            <tr id="tr1" class="mt-3">
                <td>
                <input type="button"id="button12" value="0"class="b_game" name="btn1"  />
                <input type="hidden"id="h_button12" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button22" value="0"class="b_game" name="btn2" />
                <input type="hidden"id="h_button22" value="64" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button32"value="0"class="b_game" name="btn3" />
                <input type="hidden"id="h_button32" value="32" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button42" value="0"class="b_game" name="btn4" />
                <input type="hidden"id="h_button42" value="16" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button52" value="0"class="b_game" name="btn5" />
                <input type="hidden"id="h_button52" value="8" name="h_btn1"/>
                </td>
                <td style="border-style:solid; color:#0275d8">
                <input type="button" id="button62" value="0" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button62" value="4" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button72"value="0"class="b_game" name="btn7"  />
                <input type="hidden"id="h_button72" value="2" name="h_btn1"/>
                </td>
                <td style="border-style: solid;;color:#0275d8">
                <input type="button" id="button82" value="0"class="b_game" name="btn8" />
                <input type="hidden"id="h_button82" value="1"/>
                </td>
                <td><input type="button" class="btext" id="text1" value="5" style="" name="text1"/></td>
                <td><button type="button" id="answer" class="btn btn-success value"><i class="fa fa-play " aria-hidden="true"></i></button></td>

            
            </tr> `)
            changeValue('#button12')
            changeValue('#button22')
            changeValue('#button32')
            changeValue('#button42')
            changeValue('#button52')
            changeValue('#button62')
            changeValue('#button72')
            changeValue('#button82')
            calculate('#button12','#h_button12','#button22','#h_button22',`#button32`,'#h_button32',`#button42`,'#h_button42',
            `#button52`,'#h_button52','#button62','#h_button62',`#button72`,'#h_button72',`#button82`,'#h_button82',`#text1`,`1`,`.value`)
    
    
    })
    $('#next2').click(()=>{
        $('#myTable2').append(`
        <tr id=tr2>
            <td>
            <input type="button" id="button11" value="0" class="b_game" name="btn1"/>
            <input type="hidden"id="h_button11" value="128" name="h_btn1"/>
            </td>
            <td>
            <input type="button" id="button21" value="0"class="b_game" name="btn2"/>
            <input type="hidden"id="h_button21" value="64" name="h_btn2"/>
            </td> 
            <td>
            <input type="button" id="button31"value="0"class="b_game" name="btn3"/>
            <input type="hidden"id="h_button31" value="32" name="h_btn3"/>
            </td>
            <td>
            <input type="button" id="button41" value="0"class="b_game" name="btn4"/>
            <input type="hidden"id="h_button41" value="16" name="h_btn4"/>
            </td>
            <td>
            <input type="button" id="button51" value="0"class="b_game" name="btn5"/>
            <input type="hidden"id="h_button51" value="8" name="btn5"/>
            </td>
            <td>
            <input type="button" id="button61" value="0" class="b_game" name="btn6"/>
            <input type="hidden"id="h_button61" value="4" name="btn6"/>
            </td>
            <td>
            <input type="button" id="button71"value="1"class="b_game" name="btn7"/>
            <input type="hidden"id="h_button71" value="2" name="btn7"/>
            </td>
            <td>
            <input type="button" id="button81" value="1"class="b_game" name="btn8"/>
            <input type="hidden"id="h_button81" value="1" name="btn8"/>
            </td>
            <td><input type="text" class="btext" id="text2" style="" name="text"/></td>
            
        </tr>`)
        
    $(`#text2`).on("input", function(e) {
        e.preventDefault();
        calculate2(`#button11`,'#h_button11',`#button21`,'#h_button21',`#button31`,'#h_button31',`#button41`,'#h_button41',
        `#button51`,'#h_button51',`#button61`,'#h_button61',`#button71`,'#h_button71',`#button81`,'#h_button81',`#text2`,`2`)

    });
});
});