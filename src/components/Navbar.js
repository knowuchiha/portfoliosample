import React from 'react';
import logo  from './img/logo21.png';

const Navbar = () => {
	return (
		<nav className='navbar navbar-expand-md navbar-light bg-light sticky-top'>
			<div className='container-fluid'>
				<a className='navbar-brand' href='#'>
					<img src={logo}/>
				</a>
				<button className='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbar-responsive'>
					<span class='navbar-toggler-icon'></span>
				</button>
				<div className='collapse navbar-collapse' id='navbar-responsive'>
					<ul className='navbar-nav ml-auto'>
						<li className='nav-item active'>
							<a className='nav-link' href='#'>Home</a>
						</li>
						<li className='nav-item'>
							<a className='nav-link' href='#'>About</a>
						</li>
						<li className='nav-item'>
							<a className='nav-link' href='#'>Services</a>
						</li>
						<li className='nav-item'>
							<a className='nav-link' href='#'>Team</a>
						</li>
						<li className='nav-item'>
							<a className='nav-link' href='#'>Connect</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	);
} 

export default Navbar;
