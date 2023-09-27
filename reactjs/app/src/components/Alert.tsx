import { ReactNode } from "react"

interface Props{
    children: ReactNode;
}

export const Alert = ({ children }:Props) => {
  return (
    <div >{children}</div>
  )
}
