import { Separator } from '@/components/ui/separator';
import AuthenticatedRMLayout from '@/Layouts/AuthenticatedRMLayout';
import { Layanan, Obat, PageProps, PaginatedData } from '@/types';
import { Head } from '@inertiajs/react';
import { Check, ChevronsUpDown, LayoutGrid } from 'lucide-react';
import { useState } from 'react';
import _ from 'lodash';
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs';
import { Popover, PopoverContent, PopoverTrigger } from '@/components/ui/popover';
import { Command, CommandEmpty, CommandInput, CommandList, CommandGroup, CommandItem } from '@/components/ui/command';
import { Button } from '@/components/ui/button';
import { cn } from '@/lib/utils';
import { Input } from '@/components/ui/input';

export default function LayananMedis({auth, obats, layanans}: PageProps<{layanans: PaginatedData<Layanan>; obats: any}>) {
  console.log(obats);
  const [dataLayanan, setDataLayanan] = useState(layanans.data);
  const [selectedLayanan, setSelectedLayanan] = useState<Layanan|null>(null);
  const [dataObat, setDataObat] = useState<Obat[]>(obats.medicines);
  const [open, setOpen] = useState(false);
  const [value, setValue] = useState("");

  const handleClickPasien = (id: number) => {
    let layanan = _.find(dataLayanan, function(layanan) {
      return layanan.id == id;
    })

    if(layanan != undefined) {
      setSelectedLayanan(layanan);
    }
  }

  return (
    <AuthenticatedRMLayout>
      <Head title="Layanan Pasien" />

      <div className="flex flex-row p-1 gap-2" style={{height: 'calc(100vh - 68px)'}}>
        <div className="w-1/4 min-w-80 h-full bg-white shadow-sm rounded-lg">
          <div className='flex justify-items-stretch items-center p-2 rounded-t-lg'>
            <LayoutGrid size={16}/> 
            <h4 className="p-2 text-base font-semibold tracking-tight">
              Register kunjungan pasien
            </h4>
          </div>
          <Separator className="mb-1" />
          <ul>
            { dataLayanan.map((layanan) => (
              <li key={layanan.id} >
                <div 
                  onClick={(e) => handleClickPasien(layanan.id)} 
                  className={
                    `px-3 py-1 m-1 ${selectedLayanan !== null && selectedLayanan.id ==layanan.id ? 'bg-yellow-200' : 'bg-gray-100 hover:bg-gray-200'} border-slate-200 border-solid border-[1px] hover:cursor-pointer`
                  }
                >
                  <span className='font-semibold'>{layanan.kunjungan.pasien.nama}</span><br />
                  <span className='text-xs font-semibold text-green-600'>tgl. registrasi : </span>
                  <span className='text-xs font-bold text-green-600'>{layanan.tanggal_mulai.formatted}</span>
                </div>                
              </li>
            ))
            }
          </ul>
        </div>
        <div className="h-full w-3/4 bg-white shadow-sm rounded-lg">
          <div className="h-28 border-[1px] m-4">
            
          </div>
          <div className="mx-4">
            <Tabs defaultValue="pemeriksaan" className="w-full" orientation='vertical'>
              <TabsList className="grid w-full grid-cols-2">
                <TabsTrigger value="pemeriksaan">Pemeriksaan</TabsTrigger>
                <TabsTrigger value="resep">Resep</TabsTrigger>
              </TabsList>
              <TabsContent value="pemeriksaan">    
                asdasd              
              </TabsContent>
              <TabsContent value="resep">
                <div className="flex gap-2">
                  <Popover open={open} onOpenChange={setOpen}>
                    <PopoverTrigger asChild>
                      <Button
                        variant="outline"
                        role="combobox"
                        aria-expanded={open}
                        className="flex-grow justify-between"
                      >
                        {value
                          ? dataObat.find((obat) => obat.name === value)?.name
                          : "Select obat..."}
                        <ChevronsUpDown className="opacity-50" />
                      </Button>
                    </PopoverTrigger>
                    <PopoverContent className="w-[250px] p-0">
                      <Command>
                        <CommandInput placeholder="Search framework..." />
                        <CommandList>
                          <CommandEmpty>No framework found.</CommandEmpty>
                          <CommandGroup>
                            {dataObat.map((obat) => (
                              <CommandItem
                                key={obat.id}
                                value={obat.name}
                                onSelect={(currentValue) => {
                                  setValue(currentValue === value ? "" : currentValue)
                                  setOpen(false)
                                }}
                              >
                                {obat.name}
                                <Check
                                  className={cn(
                                    "ml-auto",
                                    value === obat.name ? "opacity-100" : "opacity-0"
                                  )}
                                />
                              </CommandItem>
                            ))}
                          </CommandGroup>
                        </CommandList>
                      </Command>
                    </PopoverContent>
                  </Popover>
                  <Input className="w-24" type="number" placeholder="Jml" />
                </div>
              </TabsContent>
            </Tabs>
          </div>
        </div>
      </div>
    </AuthenticatedRMLayout>
  );
}
