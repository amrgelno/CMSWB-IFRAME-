<!--<div itemscope itemtype="https://schema.org/Person">   </div>
-->
<div class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12 " > 

    <!-- <ul class="nav"  :class="{displaynav:isdisplay}" > -->
    
    <ul class="nav"  :class="{displaynav:isdisplay}" >    
        
    <li class="Dropmenu"  v-for="(data,i) in Dropmenu" :key="i"  >

        <img  :src="data.img" class="Micon" v-if='data.Micon' /> 
    
        <strong v-if='data.footer'>        
        <span itemprop="name" v-html='data.sub1menu' >  </span> 
        <!-- <span class='fa-solid fa-angle-down mobile_dropdown_icon'>  </span> -->
    </strong>
    
       <strong  v-else>
           
       <a itemprop="url" :href="data.itemphref" >
    
       <span itemprop="name" v-html='data.sub1menu' >  </span></a> </strong>
    
    <ul id="submenu"   v-if='data.footer' >
    
    <submenu  v-for="(dt,i) in submenu" :key="i" >

        <li class="sub1" v-if='data.footer === dt.parent_id'   >  

    <img  v-if='dt.Micon'  :src="dt.img" class="Micon"  /> 
    
    <strong v-if='dt.footer'>
    
        <span itemprop="name" v-html='dt.sub1menu' >  </span>
        &nbsp;<span style='color:white;'class='fa fa-angle-right'>  </span>

    </strong>
     
       <strong  v-else>
           
       <a itemprop="url" :href="dt.itemphref" >
    
       <span itemprop="name" v-html='dt.sub1menu' >  </span></a> </strong>
    </submenu>    

    <UL ID="TREMENU" v-if='dt.footer'  >
    
        <TREMENU v-for="(dx,i) in TREMENU" :key="i" >

    <li class="sub2"  v-if='dt.footer === dx.SUBMENUID' >
    
    <img  :src="dx.img" class="Micon" v-if='dx.Micon' /> 
    
    <strong v-if='dx.footer'>
    
        <span itemprop="name" v-html='dx.sub1menu' >  </span>

    
    </strong>
     
       <strong  v-else>
           
       <a itemprop="url" :href="dx.itemphref" >
    
        <span itemprop="name" v-html='dx.sub1menu' >  </span></a> </strong>

<TREMENU>

    </UL>
    
    </li>
    
    </ul>
    </li>
    
    <li>  <form class='form1' action="Blog"  method="get">
    
    <input type="search"  size="25"  name="search"  placeholder='search!'  
    
    @focus='isplay =  !isplay'
    
    class="searcher" style="color: black;"  />
    <!-- <span class="bottom"></span>
          <span class="right"></span>
          <span class="top"></span>
          <span class="left"></span> -->
    
    <input type="submit"  size="25"  name="search" VALUE=" "  class="searchbt"   :class="{displaysearch:isplay}"    style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />
                  
        </form>   </li>
    
       
    </ul>

    <button type="button"style='background:unset;' @click='isdisplay =  !isdisplay'   class="menu">  <DIV ID="MENUAFTER"> </DIV>
        <div id="menuico"> </div> 
        <DIV ID="MENUBEFORE"> </DIV> &nbsp; &nbsp;  Menu</button>

    </div>
 
    
    
    