import { PropsWithChildren } from 'react';
import background from '../../images/background.jpg';

export default function Guest({ children }: PropsWithChildren) {
    return (
        <div 
          className="bg-hero-lg bg-no-repeat bg-cover bg-center bg-fixed flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900"
        >
            {children}
        </div>
    );
}
