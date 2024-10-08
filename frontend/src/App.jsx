import Navbar from './components/Navbar';
import Highlight from './components/Highlight';
import Products from './components/Products';

export default function App() {
  return (
    <main className='relative'>
      <Navbar />
      <section className='xl:padding-l wide:padding-r padding-b'>
      <Highlight />
      </section>
    </main>
  )
}