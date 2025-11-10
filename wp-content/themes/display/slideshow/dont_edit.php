<?xml version="1.0" encoding="utf-8" ?>
<cu3er>
	<settings>
	
		<auto_play>
          <defaults symbol="circular" time="5"/>
          
      	</auto_play>
      	
      <preloader>
          <tweenIn alpha="0"/>
      </preloader>
      
      <description>
          <defaults heading_font="Trebuchet MS" paragraph_text_size="13" heading_text_margin="10, 25, 5, 25" round_corners="10, 10, 10, 10"/>
          <tweenIn width="740" y="300" x="100"/>
      </description>



		
    	<prev_button>
			<defaults round_corners="5,5,5,5"/>
			<tweenOver tint="0xFFFFFF" scaleX="1.1" scaleY="1.1"/>
			<tweenOut tint="0x000000" />
		</prev_button>
		
    	<prev_symbol>
			<tweenOver tint="0x000000" />			
		</prev_symbol>
		
    	<next_button>
			<defaults round_corners="5,5,5,5"/>			
			<tweenOver tint="0xFFFFFF"  scaleX="1.1" scaleY="1.1"/>
			<tweenOut tint="0x000000" />
		</next_button>
		
    	<next_symbol>
			<tweenOver tint="0x000000" />
		</next_symbol>	
			
	</settings>    

	<slides>
	<slide>   <url>//webtdev.com/wp-content/uploads/2011/11/s2.jpg</url></slide><transition direction="up" slicing="vertical" num="6" shader="flat"  /><slide>   <url>//webtdev.com/wp-content/uploads/2011/11/s1.jpg</url></slide><transition direction="down" slicing="horizontal" num="4" shader="phong"  /></slides>
</cu3er>