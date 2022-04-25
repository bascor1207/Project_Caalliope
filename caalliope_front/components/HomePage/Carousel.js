import Image from 'next/image';
import Slider from 'react-slick';


export const Carousel = ({ onClickSlide, slides }) => {
    const isSSR = () => typeof window === 'undefined';
    const setSliderSettings = (products, options = {}) => {
        const { count, withResponsive, isSsr, isLazyload = true, ...rest } = options;
  
        let slidesToShow = count || 4;
        let infinite = true;
  
        switch (products?.length) {
        case 1:
        case 2:
            slidesToShow = 2;
            infinite = false;
            break;
            case 3:
            case 4:
            infinite = false;
            break;
        }
    }

    const getSettings = (isSsr) => ({
    count: 1,
    autoplay: true,
    speed: 3000,
    autoplaySpeed: 6000,
    arrows: false,
    dots: true,
    isSsr
});

  const settings = setSliderSettings(null, getSettings(isSSR()));
  return slides?.length ? (
    <Slider {...settings}
      className={styles['main-carousel']}>
      {slides.map((content, key) => (
        <div key={key} onClick={() => onClickSlide(content, key)}>
          <a href={content.urlDest} aria-label={content.alt}>
            <picture>
              <source srcSet={content.imgXl} alt={content.alt} className={styles.imgXl} media="(min-width: 1441px)"/>
              <source srcSet={content.imgL} alt={content.alt} className={styles.imgL} media="(min-width: 769px)"/>
              <source
                srcSet={content.imgM}
                alt={content.alt}
                className={styles.imgM}
                media="(min-width: 480px)"
                width="768px"
                height="210px"
              />
              <Image className={styles['mil-bg']} src={books.img} alt={content.alt} loading={key > 0 ? 'lazy' : null} />
            </picture>
          </a>
        </div>
      ))}
    </Slider>
  ) : null;
};

export default Carousel;
