import React, { Component } from 'react';
import { Carousel } from 'react-responsive-carousel';

export default class NextJsCarousel extends Component {
	render() {
		return (
			<div>
			<h2>NextJs Carousel - GeeksforGeeks</h2>
			<Carousel>
				<div>
					<img src={book.items.volumeId.imageLinks.thumbnail} alt="image1"/>
					<p className="legend">Image 1</p>

				</div>
				<div>
					<img src={book.items.volumeId.imageLinks.thumbnail} alt="image2" />
					<p className="legend">Image 2</p>

				</div>
				<div>
					<img src={book.items.volumeId.imageLinks.thumbnail}  alt="image3"/>
					<p className="legend">Image 3</p>

				</div>
				<div>
					<img src={book.items.volumeId.imageLinks.thumbnail}  alt="image4"/>
					<p className="legend">Image 4</p>

				</div>
				<div>
					<img src={book.items.volumeId.imageLinks.thumbnail} alt="image5"/>
					<p className="legend">Image 5</p>

				</div>
			</Carousel>
			</div>
		);
	}
};
