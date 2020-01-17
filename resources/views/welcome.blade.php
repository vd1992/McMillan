<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>McMillan-McGee</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <script src="js/app.js" defer></script>
    </head>
    
    <body>
        <div class="header">
            <h2 id="tester">Rudimentary App</h2>
        </div>

        <div class="content">
            <div class="svg"> 
                <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 100 100' version='1.1' overflow='visible' width="1200px" height="800px">
                    <!-- <link xmlns='http://www.w3.org/1999/xhtml' rel='stylesheet' href='map.css' type='text/css'/> -->

                    <g id='mc2svg' transform='matrix(1 0 0 1 0 0)' stroke-width='0.1625' font-family='arial' font-face='bold' font-size='9'>
    	                <g id='wells' text-anchor='middle' class='heaters'>
		                    <g id='labels' pointer-events='none' fill='black'>
			                    <text transform='matrix(0.325 0 0 0.325 16.50375 20.48574375)' x='24.45' y='30.34925'   id='text_I-1'>I-1</text>
			                    <text transform='matrix(0.325 0 0 0.325 25.353 20.49249375)' x='37.56' y='30.35925'   id='text_I-2'>I-2</text>
			                    <text transform='matrix(0.325 0 0 0.325 20.925 10.19840625)' x='31' y='15.10875'   id='text_I-3'>I-3</text>
		                    </g>
		                    <g id='markers'>
    			                <circle id='I-1' cx='24.45' cy='27.59' r='0.975' class='well'/>
	    	    	            <circle id='I-2' cx='37.56' cy='27.6' r='0.975' class='well'/>
		        	            <circle id='I-3' cx='31' cy='16.23' r='0.975' class='well'/>
	    	                </g>
        	            </g>
                </svg>

                <div class="card">
                    <div class="instructions">
                        <p>Hover over a well</p>
                    </div>
                    <div class="well-1 view">
                        <h4>Value of well 1</h4>
                        <p>Value 1</p>
                        <h4>Another blank</h4>
                        <p>Value 1</p>
                    </div>    
                    <div class="well-2 view">
                        <h4>Value of well 2</h4>
                        <p>Value 2</p>
                        <h4>Another blank</h4>
                        <p>Value 2</p>
                    </div>  
                    <div class="well-3 view">
                        <h4>Value of well 3</h4>
                        <p>Value 3</p>
                        <h4>Another blank</h4>
                        <p>Value 3</p>
                    </div>              
                </div>
            </div>
    
        </div>
    </body>

</html>
