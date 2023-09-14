<?php
session_start()
?>



<!DOCTYPE html>
<html>
<head>
   <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Feedback</title>
</head>
<body>
   <header>
      <h1 style="text-align: center; background-color: lightblue ;">FeedbackSystem</h1>
   </header>
   <main>

      
   
    
<form action='' method='post'>
      
      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: B.Murali Mohan
               <br>
               subject: P and S
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r11first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r11first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r11first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r11first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r11first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r21sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r21sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r21sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r21sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r21sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r31thrid' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r31thrid' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r31thrid' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r31thrid' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r31thrid' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r41fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r41fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r41fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r41fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r41fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r51five'value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r51five'value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r51five'value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r51five'value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r51five'value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


            <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: I.Murali krishna
               <br>
               subject: Data Mining
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r12first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r12first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r12first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r12first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r12first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r22sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r22sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r22sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r22sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r22sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r32third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r32third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r32third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r32third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r32third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r42fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r42fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r42fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r42fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r42fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r52five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r52five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r52five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r52five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r52five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: G. Padmaja
               <br>
               subject: FLAT
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r13first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r13first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r13first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r13first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r13first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r23sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r23sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r23sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r23sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r23sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r33third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r33third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r33third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r33third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r33third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r43fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r43fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r43fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r43fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r43fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r53five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r53five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r53five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r53five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r53five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>



      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: M.Kalpana
               <br>
               subject: CO
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r14first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r14first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r14first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r14first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r14first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r24sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r24sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r24sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r24sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r24sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r34third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r34third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r34third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r34third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r34third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r44fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r44fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r44fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r44fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r44fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r54five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r54five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r54five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r54five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r54five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: I. Murali Krishna
               <br>
               subject: DM Lab
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r15first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r15first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r15first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r15first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r15first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r25sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r25sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r25sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r25sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r25sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r35third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r35third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r35third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r35third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r35third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r45fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r45fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r45fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r45fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r45fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r55five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r55five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r55five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r55five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r55five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: A.P.Sastri
               <br>
               subject: R Lab
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r16first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r16first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r16first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r16first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r16first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r26sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r26sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r26sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r26sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r26sec' value='5'>Excellect
                </div>

                <br>

      <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
            
             <div>
               <input type='radio' style='width:15px;height:20px;'   name='r36third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r36third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r36third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r36third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r36third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r46fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r46fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r46fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r46fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r46fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r56five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r56five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r56five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r56five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r56five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: M. Pavan 
               <br>
               subject: NLP Lab
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r17first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r17first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r17first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r17first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r17first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r27sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r27sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r27sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r27sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r27sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r37third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r37third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r37third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r37third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r37third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r47fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r47fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r47fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r47fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r47fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r57five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r57five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r57five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r57five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r57five' value='5'>Excellect
                </div>

                
                <br>
         </div>
      </div>


      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: P.S. Slipa
               <br>
               subject: WT
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r18first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r18first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r18first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r18first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r18first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r28sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r28sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r28sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r28sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r28sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r38third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r38third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r38third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r38third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r38third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r48fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r48fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r48fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r48fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r48fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r58five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r58five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r58five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r58five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r58five' value='5'>Excellect
                </div>
                <br>
         </div>
      </div>


       <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src=".$row['img']." style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: M.Pavan
               <br>
               subject: CRT
           
            </div>
         </div>


         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b><br></u>
               <input type='radio' style='width:15px;height:20px;' name='r19first' value='1' ><span >Below Average</span>
               <input type='radio'  style='width:15px;height:20px;' name='r19first' value='2'>Average
               <input type='radio'  style='width:15px;height:20px;' name='r19first' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r19first' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r19first' value='5'>Excellect
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r29sec' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'   name='r29sec' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r29sec' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r29sec' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r29sec' value='5'>Excellect
                </div>

                <br>


                <div>
               3.<u><b>Approach towards developing professional skills of students:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'   name='r39third' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r39third' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'   name='r39third' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r39third' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'   name='r39third' value='5'>Excellect
                </div>

                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r49fourth' value='1'><span >Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r49fourth' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r49fourth' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'   name='r49fourth' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r49fourth' value='5'>Excellect
                </div>

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b><br></u>
               </div>
               <div>
               <input type='radio' style='width:15px;height:20px;'  name='r59five' value='1'><span>Below Average</span>
               <input type='radio' style='width:15px;height:20px;'  name='r59five' value='2'>Average
               <input type='radio' style='width:15px;height:20px;'  name='r59five' value='3'>Good
               <input type='radio' style='width:15px;height:20px;'  name='r59five' value='4'>Very Good
               <input type='radio' style='width:15px;height:20px;'  name='r59five' value='5'>Excellect
                </div>
                <br>
         </div>
      </div>

  <input type="submit" class="btn btn-primary" name= 'Feedbacksubmit' style='width: 50%; margin: 50px 50px 50px 300px; padding: 10px 10px 10px 10px; font-size:20px; border-radius: 10px'  value="Submit">

   </form>

   
      
 
   </main>

</body>
</html>



<!--
<html>
<head>
      <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
       <title>
           Feedback System PSCMR
       </title>
       <link rel="stylesheet" type="text/css" href="style.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <script src="https://kit.fontawesome.com/d9d229363e.js" crossorigin="anonymous"></script>

</head>
<body>
   
   <form method="post" action="" enctype="multipart/form-data">
      fn name<input type="text" name="fn"><br><br>
      subject<input type="text" name="subject"><br><br>
      <input type="file" name="file"><br><br>
      <input type="submit" name="submit">
   </form>
   <div class = 'php'>
 
</div>
</body>

</html>
-->

<?php
/*
   if (isset($_POST['submit'])){
     
      $fn = $_POST['fn'];
      echo($fn);
      $subject = $_POST['subject'];
      $file = $_FILES['file']['name'];
      $temp = $_FILES['file']['tmp_name'];
      print_r($temp);
      $filext = explode('.', $file);
      $filecheck = strtolower(end($filext));

      $fileextstored = array('png', 'jpg', 'jpeg');

      if (in_array($filecheck, $fileextstored)){
         $destinationfile = 'images/'.$file;
         move_uploaded_file($temp, $destinationfile);
      }

      $con = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($con,"feedback");
      $sql = "INSERT INTO factulty(fn, subject, img)VALUES('$fn', '$subject', '$destinationfile')";

      if(mysqli_query($con,$sql)){
           echo "connected";
        }
        else{
           echo "not connected";
           // code...
        }
       

         $sql = "select * from factulty";
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res))
        {
           echo("<table border=2 cellspacing=20> <tr>");
           echo("<td>".$row['fn']."</td>");
           echo("<td></td>");
           echo("<td> <img src =".$row['img']."></td>");
           echo("</table> </tr>");
        }
   }

/*$date = "CSM".date("dmy");
$con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");
    $sql = "select * from $date";
   
   
    //$sql="INSERT INTO reg(fname,lname,uname,pwd,email,mob)VALUES('$fname','$lname','$uname,'$pwd','$email','$mob')";
        if(mysqli_query($con,$sql)){
           echo "fill form";
        }
        else{
           echo "Contact to your admin to lanch the feedback form";
           // code...
        }
*/
?>





