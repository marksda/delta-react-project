import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, useForm } from '@inertiajs/react';
import { FormEventHandler } from 'react';
import logo from '../../../images/logoproject.png'

export default function Login({
  status,
  canResetPassword,
}: {
  status?: string;
  canResetPassword: boolean;
}) {
  const { data, setData, post, processing, errors, reset } = useForm({
    email: '',
    password: '',
    remember: false,
  });

  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    post(route('login'), {
      onFinish: () => reset('password'),
    });
  };

  return (
    <GuestLayout>
      <Head title="Log in" />

      {status && (
        <div className="mb-4 text-sm font-medium text-green-600">
          {status}
        </div>
      )}

      <div className="flex justify-center w-full h-80 items-center">
        <div className="flex flex-row w-[700px] h-[370px] rounded-3xl bg-black-rgba">    
          <div className="w-[350px] py-10 px-7">
            <img className='h-[70px]' src={logo} alt="no-image" />
            <div className='mt-6'>
              <h1 className="text-2xl text-white font-bold">MINI-SIMRS</h1>
              <span className="text-sm text-white ">By: Syaiful Dwi Anwar</span>
            </div>
          </div>      
          <div className="w-[350px] h-[400px] mt-[-16px] bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg md:rounded-2xl dark:bg-gray-800">
            <form onSubmit={submit}>
              <div>
                <h1 className="text-2xl font-bold mb-4">LOGIN</h1>
                <InputLabel htmlFor="email" value="Email" />

                <TextInput
                  id="email"
                  type="email"
                  name="email"
                  value={data.email}
                  className="mt-1 block w-full"
                  autoComplete="username"
                  isFocused={true}
                  onChange={(e) => setData('email', e.target.value)}
                />

                <InputError message={errors.email} className="mt-2" />
              </div>

              <div className="mt-4">
                <InputLabel htmlFor="password" value="Password" />

                <TextInput
                  id="password"
                  type="password"
                  name="password"
                  value={data.password}
                  className="mt-1 block w-full"
                  autoComplete="current-password"
                  onChange={(e) => setData('password', e.target.value)}
                />

                <InputError message={errors.password} className="mt-2" />
              </div>

              <div className="mt-4 flex items-center justify-end">
                <PrimaryButton className="ms-4" disabled={processing}>
                  Log in
                </PrimaryButton>
              </div>
            </form>
          </div>
        </div>
      </div>
    </GuestLayout>
  );
}
