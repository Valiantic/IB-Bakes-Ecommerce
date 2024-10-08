import Button from './Button'
import  arrowRight  from "../assets/icons/arrow-right.svg";

// IMAGE IMPORTS
import bdayCake from "../assets/Images/bday_cake.png";
import congratsCake from "../assets/Images/congrats_cake.png";
import youngCake from "../assets/Images/young_cake.png";

import React from 'react'

const Highlight = () => {
  return (
    <section id="home"  className='w-full flex xl:flex-row flex-col justify-center min-h-screen gap-10 max-container'>

    <div className='relative xl:w-2/5 flex flex-col justify-center items-start 
    w-full max-xl:padding-x pt-28 mt-10'>

        {/* OPENING HEADLINES */}
        <p className='text-xl font-montserrat text-dark-rose font-bold'>Check-out our Bake Collections!</p>
        <h1 className='mt-10 font-palanquin text-8xl max-sm:text-[72px] max-sm:leading-[82] font-bold'>
            <span className='xl:bg-white xl:whitespace-nowrap relative z-10 pr-10'>IB Bakes Sweet</span>
            <br />
            <span className='text-dark-rose inline-block mt-3'>Cakes and Pastry</span>
            Treats
        </h1>
        <p className='font-montserrat text-slate-gray text-lg leading-8 mt-6 mb-14 sm:max-w-sm'>"Explore our collection and indulge in the art of baking, delivered straight to your door."</p>
        <Button label='Order now!' iconURL={arrowRight} />

        {/* SUB HEADLINES */}
        <div className='flex justfiy-starts items-start flex-wrap w-full mt-20 gap-16'>
          <h1 className='text-4xl font-palanquin font-bold leading-7 text-slate-gray'>𝙵𝚛𝚎𝚜𝚑 • 𝙳𝚎𝚕𝚒𝚌𝚒𝚘𝚞𝚜 • 𝚂𝚠𝚎𝚎𝚝 • 𝚃𝚊𝚜𝚝𝚢 •
          </h1>
        </div>     

    </div>
      
        {/* HIGHLIGHT IMAGE */}
        <div className='relativerelative flex-1 flex justify-center items-center xl:min-h-screen 
        max-xl:py-40 bg-primary bg-rose bg-cover bg-center'>
          <img src={bdayCake} alt="higlight image" width={610} height={502} className='object-contain relative z-10'/>

        </div>
    </section>
  )
}

export default Highlight
