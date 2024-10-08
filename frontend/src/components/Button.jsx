import React from 'react'

const Button = ({label, iconURL}) => {
  return (
    <button className='flex justify-center items-center
    gap-2 px-7 py-4 border font-serif text-lg leading-none
    bg-rose rounded-full text-slate-white border-rose'>
        {label}
        <img src={iconURL} alt="arrow right icon" 
        className='ml-2 rounded-full bg-white w-5 h-5'/>
    </button>
  )
}

export default Button
