import React  from 'react';
import yahiko from './img/yahiko.png'
import nagato from './img/nagato.png'
import konan from './img/konoha.png'

const Threecolumnsection = () => {
	return(
		<div className='container-fluid padding'>
			<div className='row text-center padding'>
				<div className='col-xs-12 col-sm-6 col-md-4'>
					<h3>Yahiko</h3>
					<img className='pein' src={yahiko}/>
				</div>
				<div className='col-xs-12 col-sm-6 col-md-4'>
					<h3>Nagato</h3>
					<img  className='pein' src={nagato}/>
				</div>
				<div className='col-xs-12  col-md-4'>
					<h3>Konan</h3>
					<img  className='pein' src={konan}/>
				</div>
			</div>
			<hr className='my-4'></hr>
		</div>
	);
};

export default Threecolumnsection;
