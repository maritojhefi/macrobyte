<template>
    <div > 
        <nav-component></nav-component>

		<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content-wrapper">
				<!-- MENU SIDEBAR WRAPPER -->
				<sidebar-component></sidebar-component>
				<div class="content container-fluid">
					

				 <router-view></router-view>
				</div>
			
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
					<aside class="sidebar sidebar-right">
						    <div class="sidebar-content">
								<div class="tab-panel m-b-30" id="sidebar-tabs">
																				
							   </div>
						</div>
					</aside>
			</div>
       
    </div>
</template>
 
<script>
import NavComponent from './components/partials/NavComponent.vue'
import SidebarComponent from './components/partials/SidebarComponent.vue'
    export default {
  components: { SidebarComponent, NavComponent },}
</script>