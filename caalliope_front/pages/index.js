import Head from 'next/head'
import styles from '../styles/Home.module.css'
import Footer from '../components/Footer'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
      </Head>
      <main className={styles.main}>
      </main>
      <footer className={styles.footer}>
        < Footer />
      </footer>
    </div>
  )
}
