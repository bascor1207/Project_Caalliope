import Head from 'next/head'
import styles from '../styles/Home.module.css'
import Footer from '../components/Footer'
import HomePage from './homePage'
import { BrowserRouter, Route, Routes } from 'react-router-dom'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>

      </Head>

      <main className={styles.main}>
        <div className={styles.bookItem}>
          < HomePage />
        </div>
      </main>

      <footer className={styles.footer}>
        < Footer />
      </footer>
    </div>
  )
}
