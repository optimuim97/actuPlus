<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use App\Repositories\EntityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntityCreated;
use App\Models\EntityType;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Response;
use Imgur;

class EntityController extends AppBaseController
{
    /** @var  EntityRepository */
    private $entityRepository;

    public function __construct(EntityRepository $entityRepo)
    {
        $this->entityRepository = $entityRepo;
    }

    /**
     * Display a listing of the Entity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index()
    {
        $entities = $this->entityRepository->all();

        return view('entities.index')
            ->with('entities', $entities);
    }

    /**
     * Show the form for creating a new Entity.
     *
     * @return Response
     */
    public function create()
    {
        return view('entities.create');
    }

    /**
     * Store a newly created Entity in storage.
     *
     * @param CreateEntityRequest $request
     *
     * @return Response
     */
    public function store(CreateEntityRequest $request)
    {
        $input = $request->all();

        if ($request->file('photo_url')) {
            $image = $request->file('photo_url');
            $pictures = [];
            if ($image != null) {
                // dd($image);
                $productImage = Imgur::upload($image);
                $productImageLink = $productImage->link();
            }
        } else {
            $productImageLink = '';
        }
        $input["photo_url"] = $productImageLink;


        if ($request->file('logo')) {
            $image = $request->file('logo');
            $pictures = [];
            if ($image != null) {
                $productImage = Imgur::upload($image);
                $productImageLink = $productImage->link();
            }
        } else {
            $productImageLink = '';
        }
        $input["logo"] = $productImageLink;

        $entity = $this->entityRepository->create($input);

        //TODO create user
        $password = $input['password'];
        $email = $input['email'];

        $user  = User::create([
            "email" => $email,
            "name" => $input['name'],
            "password" => bcrypt($password),
            "user_type" => 'entity',
            'entity_id' => $entity->id
        ]);

        Mail::to($email)->send(new EntityCreated($email, $password));

        //TODO Send mail to created user
        Flash::success('Entité enregistré avec succès !');

        return redirect(route('entities.index'));
    }

    /**
     * Display the specified Entity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        return view('entities.show')->with('entity', $entity);
    }

    /**
     * Show the form for editing the specified Entity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        return view('entities.edit')->with('entity', $entity);
    }

    /**
     * Update the specified Entity in storage.
     *
     * @param int $id
     * @param UpdateEntityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntityRequest $request)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        $entity = $this->entityRepository->update($request->all(), $id);

        Flash::success('Entity updated successfully.');

        return redirect(route('entities.index'));
    }

    /**
     * Remove the specified Entity from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entity = $this->entityRepository->find($id);

        if (empty($entity)) {
            Flash::error('Entity not found');

            return redirect(route('entities.index'));
        }

        $this->entityRepository->delete($id);

        Flash::success('Entity deleted successfully.');

        return redirect(route('entities.index'));
    }
}
