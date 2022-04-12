import styles from '../styles/Footer.module.css';

const Footer = () => {
    return (
        <footer className={styles.footer}>
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-footer">
                            <a href="/Contact/" class="text-dark">Nous contacter</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3">
                © 2022 Copyright: Caalliope
            </div>
        </footer>
    );
}

export default Footer;