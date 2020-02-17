<div class="row py-5">
	<div class="card col-sm-8 colbackground">
		<div class="row">
			<div class="col-sm-9">
			    <p class="font-weight-bold text-white py-2">SESSIONS</p>
			</div>
			<div class="col-sm-3 float-right">
				<a class="nav-link" href="#">
                    <!-- <i class="fas fa-grip-lines f7a4"></i> -->
                    <i class="fas fa-sliders-h textcol  mx-5 px-5 pl-5 ml-5"></i>
                </a>
            </div>
		
		</div>
	    <div class="row">
			<div class="col-sm-8">
				<button type="button" class="btn">
				    <span class="badge badge-pill badgecolour text-white p-2">HOUR</span>
				</button>
				<button type="button" class="btn">
					<span class="badge badge-pill badgecolour1 text-white p-2">DAY</span>
				</button>
			    <button type="button" class="btn">
					<span class="badge badge-pill badgecolour1 text-white p-2">WEEK</span>
				</button>
				<button type="button" class="btn">
					<span class="badge badge-pill badgecolour1 text-white p-2">MONTH</span>
				</button>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row">
			<canvas id="myChart" width="900" height="400"></canvas>
		</div>
	</div>
	<div class="card col-sm-4 colbackground">
		<div class="row">
			<div class="col-sm-8">
			    <p class="font-weight-bold text-white py-2">USERS BY DEVICES</p>
			</div>
			<div class="col-sm-4">
				<a class="nav-link" href="#">
                    <!-- <i class="fas fa-grip-lines f7a4"></i> -->
                    <i class="fas fa-sliders-h textcol my- mx-5 px-2"></i>
                </a>
            </div>
		</div>
		<div class="row">
			<canvas id="chDonut1"></canvas>
			<!-- <div id="piechart"></div> -->
				<!--<div id="percent"></div>
                       <svg id="svg">
                       <path id="path" d="M100,20 A80,80 0 0,0 100,180" stroke="#000000" fill="none" style="stroke-width: 12;"></path>
                       </svg> -->
			</div>
		<div class="row">
			<div class="col-sm-4">
				<a href="#">
					<i class="fas fa-desktop ml-4"></i>
					<br>
					<label class="font-weight-bold textcol">DESKTOP</label>
					<p class="font-weight-bold text-white  ml-3">62.3%</p>
                </a>
			</div>
			<div class="col-sm-4">
				<a href="#">
					<i class="fas fa-tablet-alt ml-4"></i>
					<br>
					<label class="font-weight-bold textcol">TABLET</label>
					<p class="font-weight-bold text-white  ml-3">30.2%</p>
                </a>
			</div>
			<div class="col-sm-4">
				<a href="#">
					<i class="fas fa-mobile-alt ml-4"></i>
					<br>
					<label class="font-weight-bold textcol">MOBILE</label>
					<p class="font-weight-bold text-white ml-3">7.5%</p>
                </a>
			</div>
	    </div>
		<div class="row">
			<div class="col-sm-6">
				<button type="button" class="btn">
					<span class="badge badge-pill badgecolour2 text-white p-2">LAST WEEK</span>
				</button>
			</div>
			<div class="col-sm-6">
				<button type="button" class="btn">
					<span class="badge badge-pill badgecolour2 text-white p-2">VIEW FULL REPORT</span>
                </button>
			</div>
		</div>
	</div>
</div>