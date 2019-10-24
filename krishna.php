<html>

<head>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="notify.js"></script>
    
    <style>
        input {
            /* background-color: transparent;
            border: 0px solid; */
            height: 33px;
            width: 160px;
            color: black;
        }
        .box{
            display: flex;
  
            border-right:  2px solid black;
            border-left:   2px solid  black;
        }
        .push {
            margin-left: 0.4rem !important;
        }
        th{
            text-align: center;
        }
        .suggestions {
  margin: 0;
  padding: 0;
  position: relative;
  perspective: 35px;
}

.suggestions li {
  background: white;
  list-style: none;
  border-bottom: 1px solid #D8D8D8;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.14);
  margin: 0;
  padding: 5px;
  transition: background 0.2s;
  display: flex;
  justify-content: space-between;
  text-transform: capitalize;
}

.suggestions li:nth-child(even) {
  transform: perspective(100px) rotateX(-1deg) translateY(2px) scale(1.001);
  background: linear-gradient(to bottom,  #330e0e 0%,#EFEFEF 100%);
}

.suggestions li:nth-child(odd) {
  transform: perspective(100px) rotateX(1deg) translateY(3px);
  background: linear-gradient(to top,  #330e0e 0%,#EFEFEF 100%);
}

  
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><br>
                <fieldset>
                    <!-- <legend>कृष्ण गोविन्द</legend> -->
                        <div style="display: flex; justify-content: space-between">
                            <div > पान नं. ३०४२३६८४०</div>
                            <div style="margin-left:3.2rem">|| श्री गणेशाय नमः ||</div> 
                            <div>मो.९८४२६४१०४/९८५२६८१३३५</div>
                        </div>
                        <h1 style="text-align:center"><strong>कृष्ण गोविन्द केरियर</strong></h1>
                        <h6 style="text-align:center">प्रधान कार्यालय बिर्तामोड ०२३-५४१०४२</h6>
                        <h6 style="text-align:center">शाखा इलाम ०२७-५२०९१४</h6>

                        <div style="display: flex; justify-content: space-between; border:2px solid black;" >
                            <div class="push"> 
                                <strong>बिल्टी नं.</strong>
                                <input type="text">
                            </div>
                            <div style="margin-left: -5.2rem">
                                <strong>बाट:</strong>
                                <input type="text"></div> 
                            <div style="margin-left: -3.2rem">
                                <strong>सम्म:</strong>
                                <input type="text">
                            </div>
                            <div>
                                <strong>मिति:</strong>
                                <input type="text">
                            </div>
                        </div>
                        <div  class="box" >
                            <div class="push"> 
                                <strong>पठाउने:</strong>
                                <input type="text"  style="width: 30.2rem;">
                            </div>
                            <div style="margin-left: 1.9rem !important;">
                                <strong>पाउने:</strong>
                                <input type="text" style="width: 30.2rem;">
                            </div> 
                        </div>
                        <div  class="box">
                            <div class="push">
                                <strong>ठेगाना:</strong>
                                <input type="text" style="width:30.2rem">
                            </div>
                            <div style="margin-left: 2.26rem;">
                                <strong>ठेगाना</strong>
                                <input type="text" style="width:30.2rem">
                            </div> 
                        </div>
                        
                        <div  class="box">
                            <div class="push">
                                    <strong>पान नं.</strong>
                                    <input type="number" style="width:30.2rem" id="ppan">
                                    <ul class="suggestions" id="ppanr">
                                    
                                    </ul>
                                </div>
                                <div style="margin-left: 2.29rem;"><strong>पान नं.</strong>
                                    <input type="number" style="width:30.2rem" id="papan">
                                    <ul class="suggestions" id="papanr">
                                    
                                    </ul>
                                </div>
                        </div>
                        <div  class="box">
                                <div class="push">
                                    <strong>बिल नं.</strong>
                                    <input type="number" style="width:30.2rem">
                                </div>
                                <div style="margin-left: 2.1rem;"><strong>बिल रकम:</strong>
                                    <input type="number" style="width:28.9rem">
                                </div>
                        </div>
                       <table width="100%" style="border:2px solid black;" border="2px solid black">
                           <tr>
                               <th width="10px">सि नं.</th>
                               <th>विवरण</th>
                               <th>अदत</th>
                               <th>वजन</th>
                               <th>दर</th>
                               <th colspan="2">रकम</th>
                           </tr>
                           <tr>
                               <td rowspan="5"><textarea name="SN" id="" cols="5" rows="10"></textarea></td>
                               <td rowspan="5"><textarea name="SN" id="" cols="50" rows="10"></textarea></td>
                               <td rowspan="5"><textarea name="SN" id="" cols="10" rows="10"></textarea></td>
                               <td rowspan="5"><textarea name="SN" id="" cols="10" rows="10"></textarea></td>
                               <td rowspan="5"><textarea name="SN" id="" cols="10" rows="10"></textarea></td>
                               <td><strong>जम्मा:</strong></td>
                               <td><input type="text" ></td>
                           </tr>
                           <tr>
                               <td><strong>स्टेशनरी:</strong></td>
                               <td><input type="text" ></td>
                           </tr>
                           <tr>
                               <td><strong>लोडिङ्ग:</strong></td>
                               <td><input type="text" ></td>
                           </tr>
                           <tr>
                               <td><strong>खर्च:</strong></td>
                               <td><input type="text" ></td>
                           </tr>
                           <tr>
                               <td><strong>कुल जम्मा:</strong></td>
                               <td><input type="text" ></td>
                           </tr>
                       </table>
                       <br>
                       <div style="display:flex; justify-content:space-between;">
                            <div class="push">
                                    <strong style="font-weight: lighter;">_____________________</strong>
                                </div>
                                <div><strong style="font-weight: lighter;">_____________________</strong>
                                    
                                </div>
                        </div>
                        <div style="display:flex; justify-content:space-between;">
                            <div style="margin-left:0.9rem;">
                                    <strong>सामान बुक गराउने</strong>
                                </div>
                                <div>
                                    <h6><strong>सुरक्षित ढुवानीको लागि प्याकिङ्ग गर्नुहोला</strong></h6>
                                </div>
                                <div style="margin-right:2.5rem;"><strong>माल वुझिलिने</strong>
                                </div>
                        </div>

                        
                    </fieldset>

                </div>
            </div>
        </div>
       
        <script src="jquery-2.2.3.min.js"></script>
        
        <script>
       
       $(document).ready(function(){
			$('#ppan').keyup(function(){
				var txt = $(this).val();
				if (txt != '') {
					$.ajax({
						url:"fetch.php",
						method:"post",
						data:{search:txt},
						dataType:"text",
						success:function(data){
                            if(data === 'added'){
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                })
                                
                                Toast.fire({
                                    type: 'success',
                                    title: 'PAN number updated successfully'
                                })
                            }else{
                                $('#ppanr').html(data);
                            }
                            
							
						}
					});
				}else{
					$('#ppanr').html('');
				}
			});
        });


        $(document).ready(function(){
			$('#papan').keyup(function(){
				var txt = $(this).val();
				if (txt != '') {
					$.ajax({
						url:"fetch.php",
						method:"post",
						data:{search:txt},
						dataType:"text",
						success:function(data){
                            if(data === 'added'){
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                })
                                
                                Toast.fire({
                                    type: 'success',
                                    title: 'PAN number updated successfully'
                                })
                            }else{
                                $('#papanr').html(data);
                            }
                            
							
						}
					});
				}else{
					$('#ppanr').html('');
				}
			});
        });
        

        </script>
        <script>
            function handleCheck(e){
                let handNumber = Number(e.target.dataset.value);
                document.getElementById('ppan').value = handNumber;
            }
            function handleChecks(e){
  
                document.getElementById('papan').value = Number(e.target.dataset.value);
            }
           const list = document.querySelector('#ppanr');
                const paList = document.querySelector('#papanr');
           
         paList.addEventListener('click' , handleChecks );
           list.addEventListener('click' , handleCheck );
            
           window.addEventListener('keyup', () => {
            if( document.getElementById('ppan') != document.activeElement ) {
                document.getElementById('ppanr').innerHTML = null;
                if(document.getElementById('papan') != document.activeElement ){
                    document.getElementById('papanr').innerHTML = null;
                }
              }
           });

           window.addEventListener('click', () => {
            if( document.getElementById('ppan') != document.activeElement ) {
                document.getElementById('ppanr').innerHTML = null;
                if(document.getElementById('papan') != document.activeElement ){
                    document.getElementById('papanr').innerHTML = null;
                }
              }
           });
          

           
        </script>
    </body>
</html>